<?php

$names = [
  'Lopes',
  'Agostinho',
  'Sambo',
  'Delopes',
  'Samil'
];

# (Lopes), (Agostinho), (Sambo), (Delopes), (Samil)

function namesInParenthesis ($names) {
  $names2 = join ('), (', $names);

  return ("($names2)");
}

print(namesInParenthesis ($names));
