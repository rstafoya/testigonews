<?php

class Kint_Parser_Trace extends Kint_Parser_Plugin
{
    public function getTypes()
    {
        return array('array');
    }

    public function getTriggers()
    {
        return Kint_Parser::TRIGGER_SUCCESS;
    }

    public function parse(&$var, Kint_Object &$o, $trigger)
    {
        if (!$o->value) {
            return;
        }

        $trace = $this->parser->getCleanArray($var);

        if (count($trace) !== count($o->value->contents) || !self::isTrace($trace)) {
            return;
        }

        $o = $o->transplant(new Kint_Object_Trace());
        $rep = $o->value;

        $old_trace = $rep->contents;

        $rep->contents = array();

        foreach ($old_trace as $frame) {
            $index = $frame->name;

            if (!isset($trace[$index]['function'])) {
                // Something's very very wrong here, but it's probably a plugin's fault
                continue;
            }

            if ($trace[$index]['function'] === 'spl_autoload_call' && !isset($trace[$index]['object']) && !isset($trace[$index]['class'])) {
                continue;
            }

            $rep->contents[$index] = $frame->transplant(new Kint_Object_TraceFrame());
            $rep->contents[$index]->assignFrame($trace[$index]);
        }

        ksort($rep->contents);
        $rep->contents = array_values($rep->contents);

        $o->clearRepresentations();
        $o->addRepresentation($rep);
        $o->size = count($rep->contents);
    }

    public static function isTrace(array $trace)
    {
        if (!Kint_Object::isSequential($trace)) {
            return false;
        }

        $any_required = array('file', 'line', 'args', 'class');

        $file_found = false;

        foreach ($trace as $frame) {
            if (!is_array($frame) || !isset($frame['function'])) {
                return false;
            }

            if (!$file_found && isset($frame['file']) && file_exists($frame['file'])) {
                $file_found = true;
            }

            if (!array_intersect(array_keys($frame), $any_required)) {
                return false;
            }
        }

        return $file_found;
    }

    public static function trimTrace(array $trace)
    {
        $trimmed_trace = array();

        foreach ($trace as $index => $frame) {
            if (self::frameIsInternal($frame)) {
                $trimmed_trace = array();
            }

            $trimmed_trace[] = $frame;
        }

        return $trimmed_trace;
    }

    private static function frameIsInternal(array $frame)
    {
        self::normalizeAliases(Kint::$aliases);

        if (isset($frame['object'])) {
            $called = array($frame['object'], strtolower($frame['function']));
        } elseif (isset($frame['class'])) {
            $called = array(strtolower($frame['class']), strtolower($frame['function']));
        } else {
            $called = strtolower($frame['function']);
        }

        return in_array($called, Kint::$aliases, true);
    }

    private static function normalizeAliases(array &$aliases)
    {
        foreach ($aliases as $index => &$alias) {
            if (!is_callable($alias)) {
                unset($aliases[$index]);
            } elseif (is_array($alias) && count($alias) === 2) {
                $alias = array_values($alias);
                $alias[1] = strtolower($alias[1]);
                if (is_string($alias[0])) {
                    $alias[0] = strtolower($alias[0]);
                }
            } elseif (is_string($alias)) {
                $alias = strtolower($alias);
            }
        }

        $aliases = array_values($aliases);
    }
}
