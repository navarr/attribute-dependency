# Dependency Attribute for PHP

This is a composer package to make your static analysis tools happy :)

## Usage

```php
use Navarr\Attribute\Dependency;
    
// ...
    
#[Dependency(package: 'psr/log', versionConstraint: '^1', reason: 'Use of LoggerInterface::error')]
```

## PHP 7 support

While the Attribute only works in PHP8, so long as it does not span multiple lines, it may be included in PHP7 codebases

## Tools

See [navarr/dependency-annotation](https://github.com/navarr/dependency-annotation) for tools to analyse usage.
