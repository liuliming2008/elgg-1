Release Process Workflow
########################

Release a new version of Elgg.

This is the process the core team follows for making a new Elgg release.
We have published this information in the spirit of openness,
and to streamline onboarding of new team members.

Requirements
============

* SSH access to elgg.osuosl.org
* Commit access to http://github.com/Elgg/Elgg
* Author access to http://blog.elgg.org
* Access to `Twitter account`_
* Access to `G+ page`_
* Node.js and NPM installed
* Sphinx installed
* Transifex client installed (``easy_install transifex-client``)
* Transifex account with access to Elgg project
 
1. Prepare and tag the release
==============================

Make sure your local git clone is up to date!

Merge latest commits up from lowest supported branch.
Visit https://github.com/Elgg/Elgg/compare/new...old and submit the PR
if there is anything that needs to be merged up.

Install the prerequisites:

.. code:: sh

   npm install elgg-conventional-changelog
   easy_install transifex-client

Run the ``release.php`` script. For example, to release 1.9.1:

.. code:: sh

   git checkout 1.9
   php .scripts/release.php 1.9.1

This creates a ``release-1.9.1`` branch in your local repo.

Next, submit a PR via Github:

.. code:: sh

   git push your-remote-fork release-1.9.1

Once approved and merged, tag the release:

.. code:: sh

   git checkout release-${version}
   git tag -a ${version}
   git push origin ${release}

Update Milestones on Github
 * Mark release milestones as completed
 * Move unresolved tickets in released milestones to later milestones

2. Update the website
=====================

The downloads need to point to the new releases.

Build Package
-------------

 * ssh to elgg.osuosl.org
 * Clone https://github.com/Elgg/elgg-scripts
 * Use elgg-scripts/build/build.sh to generate the .zip file.

Run without arguments to see usage. This also generates the ChangeLog.txt file.

Example::

    ./build.sh 1.8.5 1.8.5 /var/www/www.elgg.org/download/

MIT::

    ./build.sh 1.8.5 1.8.5-mit /var/www/www.elgg.org/download/
	
Update homepage, download, and previous download pages
------------------------------------------------------

* Clone https://github.com/Elgg/old-elgg-website
* Make changes, commit, push.
	
  * index.php
  * download.php
  * previous.php

* Pull to live site

  .. code:: sh

      cd /var/www/www.elgg.org && sudo su deploy && git pull

* flush apc cache (via community admin panel)

3. Make the announcement
========================

This should be the very last thing you do.

* Compose a blog on http://blog.elgg.org with HTML version of CHANGELOG.md.
* Add tags “release” and “elgg1.x” where x is whatever branch is being released.
* Tweet from the elgg `Twitter account`_
* Post from the `G+ page`_

.. _G+ page: https://plus.google.com/+ElggOrg
.. _Twitter account: https://twitter.com/elgg

