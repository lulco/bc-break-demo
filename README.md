# BC Break Demo

Demo app to demonstrate infinite loop in [Roave's Backward compatibility check](https://github.com/Roave/BackwardCompatibilityCheck).

Create demo dir
```shell
mkdir demo
cd demo
```


Install Roave Backward Compatibility Check
```shell
mkdir bc-check
cd bc-check
composer require --dev roave/backward-compatibility-check
# turn on debug output in DefaultReflector
sed -i 's/$identifier = new Identifier/var_dump($identifierName);$identifier = new Identifier/g' vendor/roave/better-reflection/src/Reflector/DefaultReflector.php
cd ../
```

```shell
git clone git@github.com:lulco/bc-break-demo.git
cd bc-break-demo
php ../bc-check/vendor/bin/roave-backward-compatibility-check --from=222e46dba45f114efc8beace4e8b01cfc2a0af12
```

You should see output like this:
```
string(21) "BcBreakDemo\Demo\Demo"
string(21) "BcBreakDemo\Demo\Demo"
string(41) "Nette\Forms\Rendering\DefaultFormRenderer"
string(17) "Nette\SmartObject"
string(16) "Nette\Forms\Form"   <-- here the infinit loop starts
string(21) "Nette\Forms\Container"
string(30) "Nette\ComponentModel\Container"
string(30) "Nette\ComponentModel\Component"
string(32) "Nette\Forms\Controls\BaseControl"
string(30) "Nette\ComponentModel\Component"
string(29) "PhpParser\NodeVisitorAbstract"
string(16) "Nette\Forms\Form"
string(21) "Nette\Forms\Container"
string(30) "Nette\ComponentModel\Container"
string(30) "Nette\ComponentModel\Component"
string(32) "Nette\Forms\Controls\BaseControl"
string(30) "Nette\ComponentModel\Component"
string(29) "PhpParser\NodeVisitorAbstract"
string(16) "Nette\Forms\Form"
string(21) "Nette\Forms\Container"
string(30) "Nette\ComponentModel\Container"
string(30) "Nette\ComponentModel\Component"
string(32) "Nette\Forms\Controls\BaseControl"
string(30) "Nette\ComponentModel\Component"
string(29) "PhpParser\NodeVisitorAbstract"
string(16) "Nette\Forms\Form"
string(21) "Nette\Forms\Container"
string(30) "Nette\ComponentModel\Container"
string(30) "Nette\ComponentModel\Component"
string(32) "Nette\Forms\Controls\BaseControl"
string(30) "Nette\ComponentModel\Component"
string(29) "PhpParser\NodeVisitorAbstract"
string(16) "Nette\Forms\Form"
string(21) "Nette\Forms\Container"
string(30) "Nette\ComponentModel\Container"
string(30) "Nette\ComponentModel\Component"
string(32) "Nette\Forms\Controls\BaseControl"
string(30) "Nette\ComponentModel\Component"
string(29) "PhpParser\NodeVisitorAbstract"
string(16) "Nette\Forms\Form"
string(21) "Nette\Forms\Container"
string(30) "Nette\ComponentModel\Container"
string(30) "Nette\ComponentModel\Component"
string(32) "Nette\Forms\Controls\BaseControl"
string(30) "Nette\ComponentModel\Component"
string(29) "PhpParser\NodeVisitorAbstract"
string(16) "Nette\Forms\Form"
string(21) "Nette\Forms\Container"
string(30) "Nette\ComponentModel\Container"
string(30) "Nette\ComponentModel\Component"
string(32) "Nette\Forms\Controls\BaseControl"
string(30) "Nette\ComponentModel\Component"
string(29) "PhpParser\NodeVisitorAbstract"
string(16) "Nette\Forms\Form"
string(21) "Nette\Forms\Container"
string(30) "Nette\ComponentModel\Container"
string(30) "Nette\ComponentModel\Component"
string(32) "Nette\Forms\Controls\BaseControl"
string(30) "Nette\ComponentModel\Component"
string(29) "PhpParser\NodeVisitorAbstract"
...
```
