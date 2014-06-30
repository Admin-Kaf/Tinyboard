vichan - A lightweight and full featured PHP imageboard.
========================================================

About
------------
vichan is a free light-weight, fast, highly configurable and user-friendly
imageboard software package. It is written in PHP and has few dependencies.

This repository contains both useful and specific modifications to Vichan. 
Some commits may be useful but you probably don't want to use everything from here.
You can use the vanilla Vichan instead : https://github.com/vichan-devel/Tinyboard
Or tinyboard : https://github.com/savetheinternet/Tinyboard

Contributing
------------
If you want to contribute to Vichan please see the vanilla repository: https://github.com/vichan-devel/Tinyboard

If you want to contribute to cable6.net, please join us on IRC first.


Support
--------

If you need assistance with installing, configuring, or using vichan, you may
find support from a variety of sources:

*	If you're unsure about how to enable or configure certain features, make
	sure you have read the comments in ```inc/config.php```.
*	Check out an [official vichan board](http://int.vichan.net/devel/).
*	You can join vichan's IRC channel for support
	[irc.6irc.net #vichan-devel](irc://irc.6irc.net/vichan-devel)

### Tinyboard support
vichan is based on a Tinyboard, so both engines have very much in common. These
links may be helpful for you as well: 

*	Tinyboard documentation can be found [here](http://tinyboard.org/docs/).
*	You can join Tinyboard's IRC channel for support and general queries: 
	[irc.datnode.net #tinyboard](irc://irc.datnode.net/tinyboard).
*	You may find help at [tinyboard.org](http://tinyboard.org/#help).

Support for cable6.net

*	You can ask questions and make requests on our support board: http://cable6.net/6/ (in french or in english)
*	You can join Cable6's IRC channel: [irc.rizon.net #cable6](http://webchat.rizon.net/?channels=cable6)

License
--------
See [LICENSE.md](http://github.com/savetheinternet/Tinyboard/blob/master/LICENSE.md).

Donations
---------
Do you like our work? You can motivate us financially to do better ;)
* Bitcoin: [![tip for next commit](http://tip4commit.com/projects/708.svg)](http://tip4commit.com/projects/708)

You can also ask us to develop some feature specially for you <3. Join our IRC
channel and ask for a quote (there are a few of us, who work with the codebase
and are skilled enough to develop such features pretty quickly).

CLI tools
-----------------
There are a few command line interface tools, based on Tinyboard-Tools. These need
to be launched from a Unix shell account (SSH, or something). They are located in a ```tools/```
directory.

You actually don't need these tools for your imageboard functioning, they are aimed
at the power users. You won't be able to run these from shared hosting accounts
(i.e. all free web servers).

Localisation
------------
Wanting to have vichan in your language? You can contribute your translations at this URL:

https://www.transifex.com/projects/p/tinyboard-vichan-devel/

Oekaki
------
vichan makes use of [wPaint](https://github.com/websanova/wPaint) for oekaki. After you pull the repository, however, you will need to download wPaint separately using git's `submodule` feature. Use the following commands:

```
git submodule init
git submodule update
```

To enable oekaki, add all the scripts listed in `js/oekaki.js` to your `instance-config.php`.

WebM support
------------
Read `inc/lib/webm/README.md` for information about enabling webm.

License
--------
See [LICENSE.md](http://github.com/vichan-devel/vichan/blob/master/LICENSE.md).
