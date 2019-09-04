<?php

namespace Generator;

function generate($data)
{
    return \Formatters\Pretty\render($data);
}
generate();
