# flexsrv
Local Symfony Flex Recipe Server

* Proxy for Official Recipes
* Proxy for Contrib Recipes
* Hosting Private Recipes

It is based on Symfony 4 with flex

## Simple Getting started
Use the Docker Image XXX (not yet available)

## Why
I hate the idea always connecting to an external system which is public available and be dependant on it. System or internet connection is offline, you cannot work, you cannot deploy, ... Also I am normally working behind a corporate proxy with authentication which blocks nearly everything out there.

Symfony Flex itself will not provide a feature for this use case (at the moment). I will not link this discussion and decisions here and I don't want to blame this decision. Fine for me, I accept this decision. I will do it on my own. Please also accept this decision. I don't want to make money with this project. I want to help people with the same problems.

## How
The application will sync the 2 github repositories https://github.com/symfony/recipes and https://github.com/symfony/recipes-contrib and built the index for it. The application will serve everything directly. Normally you have some servers which have an internet connection or are allowed to sync a github repo. If you don't have such a system you can manually download every recipe repository and place it in the right directory. Hard, but this I cannot change. I can only give you the possibility to do it.

In addition you can also sync your own repositories with recipes and have private recipes. You just have to be aware of the structure, see https://github.com/symfony/recipes#creating-recipes

## Start new Symfony Project
Sometimes you want to start a new project. Really. :-) You are sitting behind a corporate proxy and cannot use the official method. So just use this simple manual.

_Prerequisites: A working and running composer satis or on premise private packagist (or jfrog artifactory ...) in your network/environment_

* Download the https://github.com/symfony/skeleton as ZIP
* Modify the composer.json to fit your environment
  * Normally you deactivate packagist
  * Add your own satis or artifactory repository here with type composer
* In addition add the "config" "symfony" "endpoint" with the URL to this Symfony Flex Recipe Server
* Modify the "name" in composer.json for example "you/symfony-skeleton"
* Now create a new git repository and push your own skeleton to it
* Add your skeleton repository to your satis
* Now you can install a new symfony project like this


     composer create-project --repository-url https://point.to/your/composer/satis -s dev --prefer-dist you/symfony-skeleton symfony


Hey, you just installed symfony 4.0 flex without an external system. Crazy Sh** :-)

## License
MIT