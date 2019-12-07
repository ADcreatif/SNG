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

##workflow
- Choisisser un SaaS : loco
- composer req php-translation/symfony-bundle
- utilisez ou créez un storage adapter
- expliquez à votre équipe le workflow
- formez vos équipes aux outils

##Gestion des messages
- qui ajoute les nouvelles clés
- nomenclature des clés
- synchronisation entre code et traduction


## Installation du CLI
php -r "copy('https://php-translation.github.io/cli/downloads/translation.phar', 'translation.phar');"
wget https://php-translation.github.io/cli/downloads/translation.phar