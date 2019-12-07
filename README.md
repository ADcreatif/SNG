editing the translations
http://localhost:8000/admin/_trans

extract all translation key from your source code
php bin/console translation:extract app

show the messages that should be translated for french
php bin/console translation:update --dump-messages fr

update the french translation file with missing string for that locale
php bin/console translation:update --force fr

check out the command help to see its options (prefix, output, format, domain, etc.)
php bin/console translation:update --help

## workflow
- SAAS translation storage [loco](https://localise.biz/)
- multilanguage symfony application : __php-translation/symfony-bundle__
- storage adapter : __loco-adapter__

## translation key

 message key               | Description
 ---                       | ---
 label.username            | for a form label
 flash.success_login       | for flash message
 error.wrong_password      | for error message
 welcome.h1                | for heading
 introduction.p0           | for first paragraph 
 our_values.p1             | for second paragraph 
 speciel_event.p2.html     | for a paragraph with html
 thank_you                 | for any common string like "next, yes" etc.
 course.summer_course.p1   | for any non reusable translation


##  CLI installation
    php -r "copy('https://php-translation.github.io/cli/downloads/translation.phar', 'translation.phar');"
    wget https://php-translation.github.io/cli/downloads/translation.phar