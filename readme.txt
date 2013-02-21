 === MPS Flusher ===

A new feature on mod_pagespeed version 0.10.22.3 lets you flush the cache of a running server.

This can be achieved by running a touch command to the file "cache.flush" in the directory specified as ModPagespeedFileCachePath.

Default path is '/var/cache/mod_pagespeed/cache.flush' and be sure Apache's user has write permission on this folder.


== Installation ==

1.- Login to Joomla Admin
2.- Go to Extensions Manager: Extensions > Extension Manager
3.- Upload Package File: Browse to the zip file > Select Upload & Install

== Use ==

4.- Open the component: Components > MPS Flusher

*.- If your cache.flush file has a different path you can use component's options to change it.