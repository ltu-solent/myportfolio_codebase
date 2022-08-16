# Testing

## PHPDD

PHPDD is a simple php deprecation detector that can be used to easily check for compatibility of the codebase against any version of PHP.

Install composer and run `composer install` to install phpdd.

To use, from root of myportfolio_codebase:
`./vendor/bin/phpdd -t 7.4 build > phpdd-datestamp.txt`

Change the datestamp for the actual date. Outputting to a file makes to easier to browse the output.

Change the version (-t target) to the relevant PHP version.

Some components have backwards compatibility for older versions of PHP, so do expect some errors, but do check the code to make sure there are appropriate checks in place so they won't get run for the version of PHP you're using.

If you're adding a new plugin, it's worth running against the plugin on its own.