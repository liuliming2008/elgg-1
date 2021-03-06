<a name="1.9.0-rc.5"></a>
### 1.9.0-rc.5  (2014-07-10)

#### Contributors

* Matt Beckett (3)
* Jerôme Bakker (1)

#### Bug Fixes

* **core:** output/iframe made to the w3c standard ([cb25d684](https://github.com/Elgg/Elgg/commit/cb25d68478ba78115d027d587981542467dee842))
* **river:** add enabled col to river table, update on enable/disable of referenced entities ([eb041ebd](https://github.com/Elgg/Elgg/commit/eb041ebd822eb461a008ef3da93ee35d613af973), closes [#6022](https://github.com/Elgg/Elgg/issues/6022))
* **upgrade:** use correct table prefixes on river upgrade script ([1c5c2b63](https://github.com/Elgg/Elgg/commit/1c5c2b632c790cef0d1e401f3f5493da785c13ec), closes [#7033](https://github.com/Elgg/Elgg/issues/7033))


<a name="1.9.0-rc.4"></a>
### 1.9.0-rc.4  (2014-07-10)

#### Contributors

* Evan Winslow (9)
* Paweł Sroka (6)
* Matt Beckett (3)
* Jeroen Dalsem (2)
* Paul Shepel (2)
* Steve Clay (2)
* Adrián Chaves Fernández (Gallaecio) (1)
* JoseLGM (1)
* Per Jensen (1)

#### Features

* **discussions:** Added email SMTP headers for better thread grouping. ([91755a86](https://github.com/Elgg/Elgg/commit/91755a86b7ea89db71e29d632c23120b9938e87b), closes [#6894](https://github.com/Elgg/Elgg/issues/6894))


#### Documentation

* **i18n:** internationalized the documentation ([ff5fd9be](https://github.com/Elgg/Elgg/commit/ff5fd9bee7ff956cf6089bfb7d15847406f205b4), closes [#5899](https://github.com/Elgg/Elgg/issues/5899))
* **upgrading:** Added upgrade instructions for 1.8 to 1.9 ([001e3ffa](https://github.com/Elgg/Elgg/commit/001e3ffa46688f4210e284458b5f72db106453aa), closes [#5900](https://github.com/Elgg/Elgg/issues/5900))


#### Bug Fixes

* **aalborg_theme:** selected page menu does not collapse sub menu ([53f696ce](https://github.com/Elgg/Elgg/commit/53f696ce36b6555ebc1766d77429f04242b7c88d), closes [#6979](https://github.com/Elgg/Elgg/issues/6979))
* **collections:**  make urls work regardless of username ([76827f22](https://github.com/Elgg/Elgg/commit/76827f22f7092608f02a560d7dc2bda93f6ca994), closes [#6059](https://github.com/Elgg/Elgg/issues/6059))
* **core:** Added missing options array support for ElggUser methods ([30d98c67](https://github.com/Elgg/Elgg/commit/30d98c67c1a097b57ad3e684c40d53edff312603), closes [#6994](https://github.com/Elgg/Elgg/issues/6994))
* **deprecation:** the deprecation wrapper correctly handles array access ([264fc5f2](https://github.com/Elgg/Elgg/commit/264fc5f2adcad7d4ed2a9d748add58a24437b39b), closes [#7017](https://github.com/Elgg/Elgg/issues/7017), [#6917](https://github.com/Elgg/Elgg/issues/6917))
* **discussion:** no longer show entity menu items on non-discussions ([d3c7c953](https://github.com/Elgg/Elgg/commit/d3c7c9535beedcd563ac3f1ae6e98e01a68e29d2), closes [#6508](https://github.com/Elgg/Elgg/issues/6508))
* **file:**
  * destroy output buffer before sending file ([007021ff](https://github.com/Elgg/Elgg/commit/007021ff67727e618d02a3fda05d78175f7ec082))
  * download adds header Content-Length ([8375eb09](https://github.com/Elgg/Elgg/commit/8375eb09d9daeddc818d99db481880eca4f24de6))
* **groups:** give feedback if a user cannot be added to a group ([07cddc61](https://github.com/Elgg/Elgg/commit/07cddc615b7791d9bff677f7efdd7e88ef7aac40), closes [#6081](https://github.com/Elgg/Elgg/issues/6081))
* **install:** Make installer usable on smartphones ([b528d988](https://github.com/Elgg/Elgg/commit/b528d98894061fcf3a162882418e98f72794c8c7))
* **members:** prevent members search with empty query ([12f7b88f](https://github.com/Elgg/Elgg/commit/12f7b88f28a60ff8348bc122884c7e8d6c183e4f))
* **notifications:** Corrected html entities handling for email subject and body ([4bfb849e](https://github.com/Elgg/Elgg/commit/4bfb849ecd0ec9ece59e445149dd252dfc352d32), closes [#6905](https://github.com/Elgg/Elgg/issues/6905))
* **release:** Corrected release script Windows system compatibility ([18f78403](https://github.com/Elgg/Elgg/commit/18f78403564e1432ff66d486d959c9e1a76fbd5e))
* **router:** Can return 'handler' param in `'route', $identifier` hook again ([6e09758f](https://github.com/Elgg/Elgg/commit/6e09758fe9bf43dd7ef8b648cc2afd7701f4d651), closes [#6696](https://github.com/Elgg/Elgg/issues/6696))
* **rss:** River entries include their full correct summaries again ([96679d8b](https://github.com/Elgg/Elgg/commit/96679d8b774048a5be7fde1da216cedbf6516253), closes [#6901](https://github.com/Elgg/Elgg/issues/6901))
* **thewire:** More effective textarea change detection ([e07f6975](https://github.com/Elgg/Elgg/commit/e07f697594996fc931a3cd1d2849480d83ff60f2))
* **ui:** Corrected bad stretching of non-square, large avatars. Now upscaling by width. ([71ea155b](https://github.com/Elgg/Elgg/commit/71ea155bf9188abc9683a81d7f2df38da4bc0104), closes [#5602](https://github.com/Elgg/Elgg/issues/5602))
* **upgrade:** test for ability to connect to localhost if rewrite test fails ([7c49e4ce](https://github.com/Elgg/Elgg/commit/7c49e4ceee996f53ef0120df4ff0c2850c63652b), closes [#6888](https://github.com/Elgg/Elgg/issues/6888))


<a name="1.9.0-rc.3"></a>
### 1.9.0-rc.3  (2014-06-23)

#### Contributors

* Evan Winslow (4)
* Paweł Sroka (1)
* Per Jensen (1)
* RiverVanRain (1)

#### Bug Fixes

* **a11y:**
  * Add semantic structure to installer page layout ([f446e6f1](https://github.com/Elgg/Elgg/commit/f446e6f1ad328fb8573b947fd7a2f0d52cb31955))
  * Use HTML5 form features on install forms ([434efa22](https://github.com/Elgg/Elgg/commit/434efa22228fa1217553951b68ccdff0959ed3a7))
  * Label form fields in installer correctly ([dff254a9](https://github.com/Elgg/Elgg/commit/dff254a9417525660234b7aab5f165cbf11b7bde))
* **aalborg_theme:** removes unwanted  margins ([b972402d](https://github.com/Elgg/Elgg/commit/b972402da3822abf59fdee5f6126a53f52c1fe48))
* **replies:** Show reply's link on river ([5fc031a5](https://github.com/Elgg/Elgg/commit/5fc031a574543f914ff0694b447a7ab399f0a2e5))


<a name="1.9.0-rc.2"></a>
### 1.9.0-rc.2  (2014-06-09)

#### Contributors

* Evan Winslow (11)
* Per Jensen (4)
* Paweł Sroka (2)
* Jeroen Dalsem (1)
* John Supplee (1)

#### Bug Fixes

* **UserPicker:** no messages in userpicker due to lack of i18n ([7d7a7d5e](https://github.com/Elgg/Elgg/commit/7d7a7d5eedb22d6370c3adb5118da27523c6e4fc))
* **aalborg_theme:**
  * emphasizes sidebar navigation ([6ae2148c](https://github.com/Elgg/Elgg/commit/6ae2148c6a7b8fde1ead97f3d90dc1a039ebf44f), closes [#6874](https://github.com/Elgg/Elgg/issues/6874))
  * Support fullscreen mode if user adds app to homescreen ([2a193078](https://github.com/Elgg/Elgg/commit/2a193078f86bc700311df5f95369b8bdd7110336), closes [#6896](https://github.com/Elgg/Elgg/issues/6896))
  * show dashboard menu item only when logged in ([c3e0fcb8](https://github.com/Elgg/Elgg/commit/c3e0fcb8a0f2928ba8ada6ce9fff677765d701c8))
  * inconsistency between owner-block and page menu ([f54048a5](https://github.com/Elgg/Elgg/commit/f54048a5511cf8054006d474a18ebdcfef233b6e))
  * only pass body_attrs if they are set ([6ab77862](https://github.com/Elgg/Elgg/commit/6ab77862ee899a54d59086d8cf625846210fea4b))
* **deprecated:** Corrected invalid deprecation notice and added more details to few others ([5d78e2b1](https://github.com/Elgg/Elgg/commit/5d78e2b13d886bfb02ec13a014116adb4aa123df), closes [#6869](https://github.com/Elgg/Elgg/issues/6869))
* **docs:** Inline refs use @link instead of @see ([50b0e39e](https://github.com/Elgg/Elgg/commit/50b0e39e8ed3e0bdc916327848c7a0e40ca426b0))


<a name="1.9.0-rc.1"></a>
### 1.9.0-rc.1  (2014-05-19)

#### Contributors

* Cash Costello (689)
* Steve Clay (226)
* Evan Winslow (150)
* Paweł Sroka (136)
* Sem (91)
* Brett Profitt (68)
* Jeroen Dalsem (59)
* Juho Jaakkola (54)
* Per Jensen (23)
* Ismayil Khayredinov (23)
* RiverVanRain (16)
* Matt Beckett (12)
* hellekin (12)
* Jerôme Bakker (8)
* Aday Talavera (7)
* Jeff Tilson (7)
* Marcus Povey (5)
* Rasmus Lerdorf (5)
* Brad Smith (5)
* Hayden Shaw (3)
* Ben Werdmuller (3)
* András Szepesházi (2)
* slyhne (2)
* Facyla (2)
* ManUtopiK (1)
* Emmanuel (1)
* Centillien (1)
* twentyfiveautumn (1)
* Janek Lasocki-Biczysko (1)
* Ash Ward (1)
* Arsalan Shah (1)
* Angel Gabriel Vargas Beltran (1)
* Tantek Çelik (1)
* Team Webgalli (1)
* bwoodnz (1)
* Danny Navarro (1)
* EC2 Default User (1)
* Kody Peterson (1)
* Liang Lee (1)

#### Features

* **admin:** Admin notices are removed when the actions requested actions has been taken. ([e6a46a84](https://github.com/Elgg/Elgg/commit/e6a46a84fa7c9b051fb85ec03ff0774f7708ab74), closes [#6453](https://github.com/Elgg/Elgg/issues/6453))
* **amd:** added some utils to Elgg_Amd_Config class ([c45d4d18](https://github.com/Elgg/Elgg/commit/c45d4d184abc7c8058cb40ea52f9ef48220290b3))
* **comments:** Added separate edit page for generic comments ([a5c73b6e](https://github.com/Elgg/Elgg/commit/a5c73b6e7bd6eb12ad669c9afd3ee27ba8996349), closes [#6666](https://github.com/Elgg/Elgg/issues/6666))
* **core:**
  * better registration of usersettings handlers ([6469d55d](https://github.com/Elgg/Elgg/commit/6469d55dab3c424307c7091cfc6133b14b7cc670))
  * allow custom local scripts to trigger on uncaught exceptions #6586 ([7e0794ca](https://github.com/Elgg/Elgg/commit/7e0794ca184ecb308ea51b2dfd61041dcc128c17))
  * Allowing upgrade.php to forward to custom URLs. ([e5c11d8c](https://github.com/Elgg/Elgg/commit/e5c11d8c5ba681a73dec20c963d58a6b55555b99), closes [#6442](https://github.com/Elgg/Elgg/issues/6442))
* **externalpages:** page layout changed to one_column ([909536f9](https://github.com/Elgg/Elgg/commit/909536f976af289560b5e474a4b0d0c1332db140))
* **graphics:** make logos transparent ([2fc838c0](https://github.com/Elgg/Elgg/commit/2fc838c011932dba4add9b12aa043d425bb9fc3f))
* **lightbox:** added binding for elgg-lightbox-photo CSS class ([6eb22a2d](https://github.com/Elgg/Elgg/commit/6eb22a2ddfea2ed1bd2bb7e47ac559f154987e0f))
* **output:** Added second parameter to elgg_strip_tags. ([39f8d80c](https://github.com/Elgg/Elgg/commit/39f8d80c6d8845194b8b7d928545534d39b7e574))
* **search:** Allows filtering/reordering types returned in search ([5eebf1e6](https://github.com/Elgg/Elgg/commit/5eebf1e60c0f0974479f7d531293c1b01b1daa3e), closes [#6118](https://github.com/Elgg/Elgg/issues/6118))
* **ui:**
  * adds fallback png favicons ([5168a576](https://github.com/Elgg/Elgg/commit/5168a576e6437438dcbe202c83721d68073e8a1a))
  * add svg favicon ([6c84d2f3](https://github.com/Elgg/Elgg/commit/6c84d2f394530bcaceb377e734c075c227923cb7))
* **upgrade:** Added ElggUpgrade object. ([3aae56b4](https://github.com/Elgg/Elgg/commit/3aae56b4c3f41c171e5e6eb0678b63e16d59da19))
* **users:** making nicer lost password process ([d7c6f850](https://github.com/Elgg/Elgg/commit/d7c6f850415b42a6ebaee254060874ff310d9de7), closes [#5886](https://github.com/Elgg/Elgg/issues/5886))
* **uservalidationbyemail:** forwarding to an info page after registration ([6fbb8c93](https://github.com/Elgg/Elgg/commit/6fbb8c935d29c891ef5ba07470a74ea3e0f7815c), closes [#6247](https://github.com/Elgg/Elgg/issues/6247))
* **ux:** Failed file uploads give better error messages. ([8eb652c2](https://github.com/Elgg/Elgg/commit/8eb652c2fce56dfb86c5f9180cb9ab7913648d1a), closes [#6593](https://github.com/Elgg/Elgg/issues/6593))
* **views:** bypasses minification for views like -min/.min ([0462bdff](https://github.com/Elgg/Elgg/commit/0462bdff6179c8c196861fb2cd2a1cbfd210559a), closes [#6260](https://github.com/Elgg/Elgg/issues/6260))


#### Performance

* **groups:** remove redundant filter of user-owner group acls ([a65df346](https://github.com/Elgg/Elgg/commit/a65df34610d983d2dad7fcb0dc443e0baebbc11f), closes [#6434](https://github.com/Elgg/Elgg/issues/6434))
* **upgrade:**
  * ajaxifies data directory migration ([031b77fc](https://github.com/Elgg/Elgg/commit/031b77fc7c5b0db57d7eb8b34d06e6f9e075d706), closes [#6202](https://github.com/Elgg/Elgg/issues/6202))
  * speeds up migrating remember me codes ([52f9fa4c](https://github.com/Elgg/Elgg/commit/52f9fa4c7c9bad28140596809b26a30a2b286abd), closes [#6204](https://github.com/Elgg/Elgg/issues/6204))


#### Documentation

* **aalborg_theme:** document change of content order ([0ed207d9](https://github.com/Elgg/Elgg/commit/0ed207d904fe5c53c3926bc11e45aae5321f85f9), closes [#5787](https://github.com/Elgg/Elgg/issues/5787))
* **about:** Add contributing, history, releases, and values docs ([1b67f575](https://github.com/Elgg/Elgg/commit/1b67f575d2e50e7e34d4ad252a07c181b33b0fbb))
* **admin:** Created new admin section for admin-specific docs ([abc55ef1](https://github.com/Elgg/Elgg/commit/abc55ef1b1443eaf364dd48dc0cd5510d097c9c9))
* **all:** Cut fluff ([bae2d199](https://github.com/Elgg/Elgg/commit/bae2d199addd85aeffcf6f5c642a5d59264b8e74))
* **amd:** Separated design and guides for AMD docs. ([d0ebcb7a](https://github.com/Elgg/Elgg/commit/d0ebcb7aa70add70f1b08b9a1dbcee89ac043e60))
* **appendix:** move about => appendix; add contribute guide ([118bfa16](https://github.com/Elgg/Elgg/commit/118bfa1613ad5aba4359e199798fbfff222ce038))
* **autoloader:** more accurate docs for autoloader ([5fdbc181](https://github.com/Elgg/Elgg/commit/5fdbc181b315c76762fce92db23cb19bc8d54d0d))
* **changelog:**
  * Fully updated CHANGELOG.md (to 1.9.0-dev) ([31d757dd](https://github.com/Elgg/Elgg/commit/31d757dd2d5a79f5952adafeef37a86ab283aeed), closes [#5798](https://github.com/Elgg/Elgg/issues/5798))
  * Better markdown formatting ([9e66e428](https://github.com/Elgg/Elgg/commit/9e66e428e28007f103da07381f67e6ab337fe6ea))
  * Move CHANGES.txt to CHANGELOG.md ([d13673c9](https://github.com/Elgg/Elgg/commit/d13673c951e746d2ff47c00cb631dae4d939469d))
* **code:**
  * fix whitespace warnings ([110a6844](https://github.com/Elgg/Elgg/commit/110a6844244af85f98e30981deefd3f23c93c9eb))
  * add docs on testing and cleanup ([d9f2cdca](https://github.com/Elgg/Elgg/commit/d9f2cdcab947d41240fb90273eba4a359fe5a2b0))
  * merge coding_standards into contribute/code.rst ([b752e6dd](https://github.com/Elgg/Elgg/commit/b752e6ddda0a7e9698e4fc0cbfea6800d3a58df7))
* **config:** document custom exception handling ([7dde7bf4](https://github.com/Elgg/Elgg/commit/7dde7bf41108827e20c275023254c441eee4bd0d))
* **contribute:**
  * add instructions for translators ([feb16f6a](https://github.com/Elgg/Elgg/commit/feb16f6a2d0de590b9272c6366a230a1393ad7d7))
  * add instructions for rewriting commit messages ([4e5d6e3c](https://github.com/Elgg/Elgg/commit/4e5d6e3c4e7b361bcf0af5b7c6d3d023b00d0711))
  * clean up PR instructions ([16308a46](https://github.com/Elgg/Elgg/commit/16308a46f12725933bd99ac3f88ea273b75d2335))
  * expanded contributors section ([b969080c](https://github.com/Elgg/Elgg/commit/b969080cf810a9f6eed7f808dd7dccbd7a464744))
* **events:** Reword docs for hooks ([3cb690fe](https://github.com/Elgg/Elgg/commit/3cb690fe8a6fde38662f6d5627fb8885aa609265))
* **fix:** Fixing MD links for new docs. ([04c399f3](https://github.com/Elgg/Elgg/commit/04c399f3ffd30aee41eeb2d8549c23d8f0e1b0a4))
* **guides:** add web services dev guide ([400a2453](https://github.com/Elgg/Elgg/commit/400a2453bd1e73f542dfd9266df06a754d471478))
* **hooks:** Corrects docs syntax error ([69ae152d](https://github.com/Elgg/Elgg/commit/69ae152db7ef43f324144a305a1e89cb8f2e6a1c))
* **i18n:** Add minimal i18n documentation ported from wiki ([6b0e58df](https://github.com/Elgg/Elgg/commit/6b0e58df5ec94fea3286ec6293770e8ee2340a59))
* **js:** use proper title markup ([77146f46](https://github.com/Elgg/Elgg/commit/77146f4675d69155a070a3dbf9cbdc68f781f7f5))
* **moved:** use :orphan: instead of lying toctree ([6544176d](https://github.com/Elgg/Elgg/commit/6544176d3cb7edf63517294bd65f827e457a841b))
* **outline:** make titles consistent with each other ([d554e9b0](https://github.com/Elgg/Elgg/commit/d554e9b0c8bef16caeacb17f495145b7236f7198))
* **performance:** add suggestions for performance and scalability ([76e3ecd1](https://github.com/Elgg/Elgg/commit/76e3ecd166e14b68b49829a3b0116984a335f542))
* **plugins:** added instructions on upgrading plugins for Elgg 1.9 ([b1c501c4](https://github.com/Elgg/Elgg/commit/b1c501c4704a3b30baff40e6b8fdfc9f28631892))
* **release:** add release process workflow ([5df29847](https://github.com/Elgg/Elgg/commit/5df29847b7a1293df0857e5bc4ee05d6dc65a4c8))
* **releases:** add commit access as requirement ([9821089c](https://github.com/Elgg/Elgg/commit/9821089ca8280e425ddb282c83b4b6cf1859206d))
* **rewrite:** Finish migration from what we had in GDocs ([ce8c40b3](https://github.com/Elgg/Elgg/commit/ce8c40b385131e79304df52e56a636c02ea5bcaf))
* **security:** Add security rst docs ([fc52baf3](https://github.com/Elgg/Elgg/commit/fc52baf37a51f2e9982b02f99d9562be21b2077e))
* **themes:** converts theming docs to rst ([fddd7686](https://github.com/Elgg/Elgg/commit/fddd76861b19fb7162f7f5cae0b789dcca0eb859))
* **tutorials:** Add blog, indexpage, widget, and wysiwyg ([faafc2e2](https://github.com/Elgg/Elgg/commit/faafc2e26afcab8bc0ef5a464d66664314fcc892))
* **updates:** Updating contributing docs to point to feedback and planning group and to mentio ([c10f09f8](https://github.com/Elgg/Elgg/commit/c10f09f868a3b7b6b00c2e9fe829284894fe125f))
* **views:** Updated docs for elgg_extend_view() to address uniqueness of extended views. ([06c95e4b](https://github.com/Elgg/Elgg/commit/06c95e4be9aa14329c380fc3a792e01a8aa5527e), closes [#6661](https://github.com/Elgg/Elgg/issues/6661))


#### Bug Fixes

* **a11y:** keep focus outlines by default ([56add7a6](https://github.com/Elgg/Elgg/commit/56add7a6eba3a28bd9dc2e7af22fb03d2b9a145d), closes [#6319](https://github.com/Elgg/Elgg/issues/6319))
* **aalborg_theme:** standardize padding on input and a buttons ([dbc510d7](https://github.com/Elgg/Elgg/commit/dbc510d79935f3ccbad8bbf3c825cc617851a50f))
* **admin:**
  * show plugin settings menu on markdown page ([19e3e8d3](https://github.com/Elgg/Elgg/commit/19e3e8d36c9612c041017127d852dd8881ddbf55))
  * fixed javascript error on toggle simple cache checkbox ([0533f2a3](https://github.com/Elgg/Elgg/commit/0533f2a3aac63d8b67a25525739777edc30e7437), closes [#6529](https://github.com/Elgg/Elgg/issues/6529))
* **amd:** removed elgg_require_js for backwards compatibility ([76584089](https://github.com/Elgg/Elgg/commit/76584089bee2b3246c736edb6b250e149acf906f), closes [#6496](https://github.com/Elgg/Elgg/issues/6496))
* **autocomplete:** use group summary instead of profile view ([82c6871c](https://github.com/Elgg/Elgg/commit/82c6871cd8daf9c06872ae2e09dda601324e8075))
* **ckeditor:**
  * create a new input element was re-enabling other input fields ([04ab5b65](https://github.com/Elgg/Elgg/commit/04ab5b656f0ee2333009d69ef844ef7c4dd96238))
  * makes sure basepath is set early enough ([9b84b0c2](https://github.com/Elgg/Elgg/commit/9b84b0c21178fa2310305946e1d40db9a47ac296))
* **comments:**
  * give comment authors edit privileges ([68c6ded7](https://github.com/Elgg/Elgg/commit/68c6ded7f6a1527fac0bb1f31e00cd780e27c5ed), closes [#6724](https://github.com/Elgg/Elgg/issues/6724))
  * fixes cancel button and forward URL on edit comment page ([2b76dad7](https://github.com/Elgg/Elgg/commit/2b76dad7ce82e497eca91e8f8aef67859e1e528f))
  * makes ElggComment E_STRICT compliant ([3f5f4728](https://github.com/Elgg/Elgg/commit/3f5f4728bb1dcd4a70cefdffd1ef9e18dfdd12be))
* **core:**
  * prevents upgrade scripts from attempting to create the same ElggUpgrade more tha ([3d5fc912](https://github.com/Elgg/Elgg/commit/3d5fc912e329e9033bbf06499c809581fc3386a0), closes [#6824](https://github.com/Elgg/Elgg/issues/6824))
  * no longer strip slashes on $_FILES and $_SERVER ([4a32796b](https://github.com/Elgg/Elgg/commit/4a32796b6bb1d217eef27c6f8e89f484db5e671a), closes [#6777](https://github.com/Elgg/Elgg/issues/6777))
  * Updated upgrade file for remember me cookies for 1.9's new table. ([c4b53e4f](https://github.com/Elgg/Elgg/commit/c4b53e4ff12d9e0b4256e770c0d786519aaf5700), closes [#6629](https://github.com/Elgg/Elgg/issues/6629))
  * MenuBuilder sortByName should use strnatcmp ([9f373b3e](https://github.com/Elgg/Elgg/commit/9f373b3eecaa9228b91f297af6df52f1bdce8d10))
  * Not redirecting in plugin and site entity views. ([1c027648](https://github.com/Elgg/Elgg/commit/1c0276481f3724ff2accf29d9f8f0063450d65cb), closes [#4439](https://github.com/Elgg/Elgg/issues/4439))
  * fault in ElggPlugin contructor ([41053468](https://github.com/Elgg/Elgg/commit/41053468ec381a4480b409d07d547d6c46a24ec4))
* **css:**
  * selected page menu does not collapse sub menu ([f9af6a66](https://github.com/Elgg/Elgg/commit/f9af6a668b7c2802886de632212ca32d76541e40))
  * add hover classes to hover icons ([fb2e9a36](https://github.com/Elgg/Elgg/commit/fb2e9a367661d0a4e4b21eb3ff368239db67001e), closes [#6737](https://github.com/Elgg/Elgg/issues/6737))
  * reposition powered by elgg ([9b3d43fc](https://github.com/Elgg/Elgg/commit/9b3d43fc7f9953e0a70be0839d1ed3dc809ba5d1))
  * prevent stretching images in IE8 ([61ac1874](https://github.com/Elgg/Elgg/commit/61ac1874ea8132fffa8dc73be789d2c42fb68f0f))
  * Added CSS for elgg-state-selected menu items in theme sandbox. ([e5741ce5](https://github.com/Elgg/Elgg/commit/e5741ce5250e1c721eca44ca25271475d057fc08))
* **developer_tools:** Added all of the defined icons to the theme preview. ([d0ccfc1b](https://github.com/Elgg/Elgg/commit/d0ccfc1b86f45479959bb4623b846bbdd8742714))
* **docs:**
  * Fixed links in mediawiki format instead of reST. Removed reference to Transifex ([b5c9f419](https://github.com/Elgg/Elgg/commit/b5c9f419ae18cb12f8d5ade56e1445d017eba2b9))
  * fix a couple of typos ([e34f57d7](https://github.com/Elgg/Elgg/commit/e34f57d752bf299bd540b11378caba346dfa865a))
* **embed:**
  * show error when when uploading too large file in embed form ([a661c65c](https://github.com/Elgg/Elgg/commit/a661c65c636272fd2a82265b0b5deffbc508ec85), closes [#4591](https://github.com/Elgg/Elgg/issues/4591))
  * file embedding wasn't working for textareas ([4f1ffdec](https://github.com/Elgg/Elgg/commit/4f1ffdecfb0d9b86ece36495c6ad1c0e3c8f6d1e), closes [#6160](https://github.com/Elgg/Elgg/issues/6160))
  * Allows embedding files from the containing group ([d5aea243](https://github.com/Elgg/Elgg/commit/d5aea243b7655efda4924f8b5ff9fa7a6c2aebea))
  * make pagination in embed colorbox usable ([4aeafa70](https://github.com/Elgg/Elgg/commit/4aeafa704dce751f24fbeea0b12f7cac8a64891f))
  * make tabs in colorbox popup usable ([16ca1fd1](https://github.com/Elgg/Elgg/commit/16ca1fd15386284f1753a4c6ec2083847c9152d1))
* **entities:** reverts to 1.8 behavior of ElggEntity->subtype reads ([2fa7c6ce](https://github.com/Elgg/Elgg/commit/2fa7c6cefd5429cb2c4b554eb55670335a9d7eec), closes [#5920](https://github.com/Elgg/Elgg/issues/5920))
* **events:** makes the plugin_id parameter reliable for plugin events ([8b62fb8e](https://github.com/Elgg/Elgg/commit/8b62fb8e4569c863618166d31636d532962624d8))
* **gatekeeper:** stop treating being logged out as an error state ([03df35cd](https://github.com/Elgg/Elgg/commit/03df35cdfb722cc9cd7063feb7f137e2cf2ac5d7))
* **git:** Igorning revert commits in Travis and in commit-message git hook. ([36acbbf0](https://github.com/Elgg/Elgg/commit/36acbbf0e2765c0ee909846fab4297f2851091b0))
* **groups:**
  * Run discussion reply migration regardless if groups plugin is enabled. ([02023f45](https://github.com/Elgg/Elgg/commit/02023f45066e48d9330e2f3c74d4baaf2401627c), closes [#6729](https://github.com/Elgg/Elgg/issues/6729))
  * check if handler is set in params before calling it ([9e2bcb6d](https://github.com/Elgg/Elgg/commit/9e2bcb6d6d23c321ef9c3b8bf44071a31df42832))
  * forces content accessibility to members_only for invisible groups ([47a8c7ab](https://github.com/Elgg/Elgg/commit/47a8c7ab02bcc3115a1eb5312125513923039429))
  * fix the group acl id in write access array ([de2b6a68](https://github.com/Elgg/Elgg/commit/de2b6a6881140c71523ce381148d3c9fe4806f94))
  * displays correct group content access options for each content access mode ([b99f475a](https://github.com/Elgg/Elgg/commit/b99f475ab18d8d0fdd7f11b440935505bc95e5d8))
* **hooks:**
  * handlers returning null/undefined don't change returnvalue in javascript ([b1af0b6d](https://github.com/Elgg/Elgg/commit/b1af0b6df31b7a1a3b87a908ca7d3752ddc2b15f), closes [#6531](https://github.com/Elgg/Elgg/issues/6531))
  * return values defaults to null in javascript ([ff095943](https://github.com/Elgg/Elgg/commit/ff09594344ed24fd3867c73a9114d7cc7fe134da), closes [#6499](https://github.com/Elgg/Elgg/issues/6499))
  * remove event handler registration ([dbcf8b48](https://github.com/Elgg/Elgg/commit/dbcf8b484a4d96d062033ef158814555102dafbf), closes [#6410](https://github.com/Elgg/Elgg/issues/6410))
* **htmlawed:** Setting the params argument to a defaut of null in htmlawed_filter_tags(). ([d337ceee](https://github.com/Elgg/Elgg/commit/d337ceee75062e33d91a4a3a57e2917638aa60f2), closes [#6614](https://github.com/Elgg/Elgg/issues/6614))
* **http:** makes HTTP request/parameter bag PHP 5.2 compatible ([21719be9](https://github.com/Elgg/Elgg/commit/21719be93708b98b1744d1230eb0a1fcbd22ad1a))
* **install:**
  * assume port 443 means HTTPS is in use ([df76005c](https://github.com/Elgg/Elgg/commit/df76005c34e0f3014a89f7fdfce26c43f98927be), closes [#6190](https://github.com/Elgg/Elgg/issues/6190))
  * Put all themes at bottom of plugins list during installation. ([ec5458d1](https://github.com/Elgg/Elgg/commit/ec5458d1f68b5f8843bb4147bb1748788135579a), closes [#6530](https://github.com/Elgg/Elgg/issues/6530))
  * fatal exception during installation ([7993273d](https://github.com/Elgg/Elgg/commit/7993273dc82ee9da8c3a09912bb659dca297132e))
* **invitefriends:**
  * make invite form sticky ([74b1556c](https://github.com/Elgg/Elgg/commit/74b1556c630105a6bf800fbf865743e343af9e79))
  * check if registration is allowed before display menu item and pages ([c83630ce](https://github.com/Elgg/Elgg/commit/c83630ceee2fb4bb0093d98dbfa1638ccf687b16), closes [#6400](https://github.com/Elgg/Elgg/issues/6400))
* **js:** Separated elgg_load_js() and elgg_define_js(). ([a73838d9](https://github.com/Elgg/Elgg/commit/a73838d98bcefc2c16004933220965fc4011ce7a))
* **lightbox:**
  * setting fancybox's z-index for colorbox ([51231f46](https://github.com/Elgg/Elgg/commit/51231f468e657bb12449b9fa9de918b7055f96cb))
  * make lightbox scrollbar look better ([aeaafa6d](https://github.com/Elgg/Elgg/commit/aeaafa6d2700c4b7f7ba12c2f3734232317cd368))
  * CKEditor was weird in lightbox ([0e4e3dd1](https://github.com/Elgg/Elgg/commit/0e4e3dd1c95c205b2e66323ea82d54127b682f73))
  * Correctly applies color box options on each element ([b2950027](https://github.com/Elgg/Elgg/commit/b2950027a3dbaf87fadbe44ddd41de0bf175f8a5), closes [#6107](https://github.com/Elgg/Elgg/issues/6107))
  * lightbox wasn't shown when generated from ajax view. ([937c8d1e](https://github.com/Elgg/Elgg/commit/937c8d1eb63f11dfc185fe99fb32a637b18a65c8), closes [#6304](https://github.com/Elgg/Elgg/issues/6304))
* **memcache:** Better logging of save/hits/misses ([6448bb95](https://github.com/Elgg/Elgg/commit/6448bb95497db21923542a10983915023c1c2d32), closes [#6243](https://github.com/Elgg/Elgg/issues/6243))
* **pages:** memory leaks in large page trees ([ab6ef0df](https://github.com/Elgg/Elgg/commit/ab6ef0dff9e8797304dd3e01c967cfad27328484), closes [#6477](https://github.com/Elgg/Elgg/issues/6477))
* **plugins:** Stops junk log entries created on plugins page ([f76312fd](https://github.com/Elgg/Elgg/commit/f76312fd2043d5ea6ecd53b0d9ccaab2f7313055), closes [#6066](https://github.com/Elgg/Elgg/issues/6066))
* **rewrite_tester:** more reliably sniffs active rewrite rules ([3090bf08](https://github.com/Elgg/Elgg/commit/3090bf08c9395fe5e8267951fdf502af3de8a770), closes [#6656](https://github.com/Elgg/Elgg/issues/6656))
* **routing:**
  * prevent upgrade if .htaccess needs updating ([1fdbf2dc](https://github.com/Elgg/Elgg/commit/1fdbf2dc5c4829edd42cfbd23ab0128172fc1d93), closes [#6521](https://github.com/Elgg/Elgg/issues/6521))
  * URL-decodes path segments like Elgg 1.8 ([6de77faa](https://github.com/Elgg/Elgg/commit/6de77faaa76fa369de4ea453244a23206f47b781), closes [#6218](https://github.com/Elgg/Elgg/issues/6218))
* **session:**
  * session unavailable in shutdown functions ([3d6c33e4](https://github.com/Elgg/Elgg/commit/3d6c33e48867c0f4d84bee94f13744481071a5ac))
  * fixes remember me functionality broken in 1.8.19 merge ([659ea108](https://github.com/Elgg/Elgg/commit/659ea1085d26f617f73dc10f2f7f16bb368508f0))
* **site_notifications:** added correct key for menu item ([186e7174](https://github.com/Elgg/Elgg/commit/186e71749da8a3aeeb23eb045e9564872475106d))
* **tests:** Corrected the way the commit message tests are run. ([9e0183f4](https://github.com/Elgg/Elgg/commit/9e0183f4dc7fa925f623ae26a6e8ca7656092fda), closes [#6507](https://github.com/Elgg/Elgg/issues/6507))
* **thewire:**
  * Restores functionality of JS max length limit parametrization ([66e478f5](https://github.com/Elgg/Elgg/commit/66e478f56d059cf9b29f6264203ce947eae070b3), closes [#6646](https://github.com/Elgg/Elgg/issues/6646))
  * Fix word count JS events tapping ([d3e3a30b](https://github.com/Elgg/Elgg/commit/d3e3a30bce30a230255e0e45423419b6a66a89de))
* **ui:**
  * mispositioned editor when editing a comment that contains a floated image ([5f52eb75](https://github.com/Elgg/Elgg/commit/5f52eb75c532f420ed085b9d41e73bef6bc102ec), closes [#6576](https://github.com/Elgg/Elgg/issues/6576))
  * use correct logo in favicon ([1c98fdac](https://github.com/Elgg/Elgg/commit/1c98fdaca4b08ed3b38f7305dcc414c5d14276d9), closes [#6446](https://github.com/Elgg/Elgg/issues/6446))
  * Added CSS to make the site menu show up correctly in theme sandbox. ([e7ac3aeb](https://github.com/Elgg/Elgg/commit/e7ac3aeb500e12c54941ccfa5cb77d6cbf143d02))
* **upgrade:**
  * Corrects query to clear admin remember me cookies ([7ee022b6](https://github.com/Elgg/Elgg/commit/7ee022b6c15daa06ea0cda4b54c616158dd46082))
  * Adds an admin notice when a new ElggUpgrade object is created ([84959e75](https://github.com/Elgg/Elgg/commit/84959e75ff4e7e3aa52a56d9a91009afbf31db58))
  * Corrected the way ignore access and show hidden entities is applied ([ccec25ac](https://github.com/Elgg/Elgg/commit/ccec25ac07fd9f20ee02d7fdf1102ecebfb60038))
  * Added upgrade to deactivate TinyMCE and activate CKEditor. ([b6970f1c](https://github.com/Elgg/Elgg/commit/b6970f1cb93f09e8ce6a083f33949da4bfd19433), closes [#6653](https://github.com/Elgg/Elgg/issues/6653))
  * Fixed a typo in the comments upgrade that broke the ajax upgrade. ([fa0340ad](https://github.com/Elgg/Elgg/commit/fa0340ada24c53ca18a7b0d3c3c90ef90ba6419f))
  * Only running comment migration timestamp fix if comments exist. ([5901995d](https://github.com/Elgg/Elgg/commit/5901995ddfc7c111c4030cbdf14aea0b0bcf8284), closes [#6621](https://github.com/Elgg/Elgg/issues/6621))
  * Correctly settings container guids' last_action times during comment migration. ([9df2367c](https://github.com/Elgg/Elgg/commit/9df2367c792f31aaefbdaa2d99b28a0bff31319d), closes [#6528](https://github.com/Elgg/Elgg/issues/6528))
  * Setting time_updated and last_action for migrated comment and discussion entitie ([ed7cf3bc](https://github.com/Elgg/Elgg/commit/ed7cf3bcca5c899618dca2279962ebc3b43893ea), closes [#6395](https://github.com/Elgg/Elgg/issues/6395))
* **uservalidationbyemail:** do not show email sent page to logged in users. ([5534a576](https://github.com/Elgg/Elgg/commit/5534a57686460824400967ccb2e3fab11b4fa6c2), closes [#6649](https://github.com/Elgg/Elgg/issues/6649))
* **ux:** Server-side validation for email fields in profile edit action. ([7d70c6df](https://github.com/Elgg/Elgg/commit/7d70c6df6be3b1444da397de9e0f5afecb3e3d11))
* **vendors:** corrected version for requirejs ([22cf6d64](https://github.com/Elgg/Elgg/commit/22cf6d64bb687ff5899b38228441612f63d200ec), closes [#6735](https://github.com/Elgg/Elgg/issues/6735))
* **views:**
  * removes notices from views used in theme sandbox ([9141ecd1](https://github.com/Elgg/Elgg/commit/9141ecd12e8975ae5e90318c27e93022e52ab339))
  * fix typo in $attrs var name ([224a7729](https://github.com/Elgg/Elgg/commit/224a7729426b67b10db38eceb05678135b1176d6))
  * only pass body_attrs if they are set ([3749dda1](https://github.com/Elgg/Elgg/commit/3749dda1411437bc8029b1facfe5922059a247f1))
  * check if body_attrs are set before attempting to format them ([baf2df93](https://github.com/Elgg/Elgg/commit/baf2df9355a5fc63679ad1aa80f363d00a51572b), closes [#6298](https://github.com/Elgg/Elgg/issues/6298))
  * Using sitedescription in meta description tag. ([66f06919](https://github.com/Elgg/Elgg/commit/66f06919735e3de97b8262cc13c7044df755795b))
  * Correct default title for confirmlink ([dd1e83c3](https://github.com/Elgg/Elgg/commit/dd1e83c3da61f8fb0dd75152a899d8ca8e8ce7a6), closes [#6375](https://github.com/Elgg/Elgg/issues/6375))



## Performance
* Using dataroot and simplecache_enabled if set in settings.php
* Changes simplecache caching so that it is performed on demand
* Adds support for simplecache minification of CSS and JavaScript
* Adds ability to enable the query cache after being disabled
* Don't call getter after a previous count call returned 0 items
* Make sure Apache2 is configured so .ico can be cached
* Adds deflate Apache filter to SVG images
* Log display no longer emit deprecation warnings and uses fewer queries
* speeds up user location upgrade
* Progress toward HHVM compatibility

## UI changes
* Lots of spit and polish
* New responsive theme - aalborg_theme
* Drops support for IE6
* Replaces fancybox lightbox with colorbox
* Replaces Tinymce editor with CKEditor
* Liking and friending use ajax
* Removes topbar Elgg logo and made "powered by" themable
* Allows keeping group content limited to the group
* Site notifications moved into separate plugin from messages
* Shows owner block when viewing own content
* Focus styles for accessible keyboard navigation
* Improved theme sandbox
* Session expired message
* Ajaxified the discussion reply edit form.
* Alphabetize friends/friends-of, group notifications, group owned/member lists
* Added support for greying out the label of disabled input
* Added more microformats to the profile page
* Automatically configure autocorrect and autocapitalize for input views
* Using unified language strings for several plugins
* Adds focus outlines to all focusable elements

## Admin changes
* Adds new notification system
* Makes the wire message length configurable
* Changes user directories use GUIDs rather than join date
* Adds banned user widget
* Adds legacy_url plugin for supporting legacy URLs
* Adds robots.txt configuration
* Adds maintenance mode
* Added automatic configuration of RewriteBase during fresh install.

## New developer features
* HTML5
* New mysql-based async queue
* AMD modules using require.js
* New notification system
* New class loader that is PSR-0 compliant
* Improves control over cookies
* Adds plugin manifest fields (id, php_version, contributors)
* Static files recognized as views
* Adds support for multi-select
* JSON rendered through views system rather than using global
* Links in login box use menu system
* Upgrades jQuery and includes the jquery migrate plugin
* Widgets can set their titles
* New JavaScript unit test library
* Front page and actions go through page handling system
* Group edit form easier to extend
* More specific list item classes
* Page layouts more standardized with same elements
* Allows customizing colorbox instances
* Views system recognizes static files as views in addition to PHP files
* Adds ability to turn off query cache
* Can change time_created if set explicitly
* Allows update event to alter attributes and checks canEdit() on DB copy
* add more specific list item classes
* moved elgg_view_icon html to own view for more flexibility
* Allow body attributes
* Eases extending the input/view view
* Split group edit form into seperate parts
* Moved group_activity widget from dashboard to groups plugin
* Adds warnings for uncallable handlers in hooks/events.
* Members list pages (tabs/content/titles) can now be extended via plugins
* Adds configuration support for remember me cookie

## API changes
* Comments and discussion replies are entities
* New notification system
* Changes elgg_register_widget_type() to expect contexts to be an array
* New session API accessible via elgg_get_session()
* Moves many functions into methods on ElggEntity and related classes
* Adds support for returning translations as arrays from language files
* Adds ElggEntity::getDisplayName()
* Adds ElggEntity::toObject()
* Adds target_guid to the river
* Adds elgg_get_entities_from_attributes()
* Adds ElggMenuItem::addItemClass()
* Adds elgg_get_menu_item()
* Adds elgg_format_element() for creating HTML elements
* ElggFile::getSize() replaces ElggFile::size()
* Defaults to full_view = false in elgg_list_entities* functions
* Allows views to be accessed via URL and cacheable
* Columns added to entity query functions are available in returned entities
* Separates some events into :before/:after
* Adds elgg_entity_gatekeeper()
* get_online_users() and find_active_users() now use $options arrays
* Adds default option to elgg_get_plugin_setting
* namespaced the gatekeeper functions (but made it optional)
* Added URL fragment (#anchors) support to elgg_http_build_url
* made elgg_unregister_menu_item() more useful

## New hooks/events
* plugin hook: simple_type, file
* plugin hook: default, access
* plugin hook: login:forward, user
* plugin hook: layout, page
* plugin hook: shell, page
* plugin hook: head, page
* plugin hook: get_sql, access
* plugin hook: maintenance:allow, url
* notifications plugin hooks
* event: init:cookie, name

## Deprecated functionality
* calendar library (was not maintained)
* web services library (now plugin distributed with Elgg)
* export, import, and opendd libraries (see ElggEntity:toObject())
* location library
* xml library
* Split logout event to before/after events
* Split login event to before/after events
* Added a deprecate notice to the elgg_view_icon use of a boolean
* Deprecated get_annotation_url() in favor of ElggAnnotation::getURL()
* Deprecated full_url() in favor of current_page_url()
* Deprecated "class" in ElggMenuItem::factory in favor of "link_class"
* Deprecated passing null to ElggRelationship constructor
* Deprecated .elgg-autofocus in favor of HTML5 autofocus
* Deprecated ElggUser::countObjects (part of Friendable interface)
* Deprecated favicon view in favor of head, page plugin hook
* Deprecated analytics view in favor of page/elements/foot
* Deprecated availability of $vars keys (url, config) and $CONFIG
* Deprecated ElggEntity::get()/set() in favor of property access
* Deprecated cron, reboot event
* Deprecated add_to_river() in favor of elgg_create_river_item()
* Renames many functions to begin with "elgg_" (with deprecated versions)

## Removed functionality
* xml-rpc library (now plugin: https://github.com/Elgg/xml-rpc)
* xml, php, and ical views (now plugin: https://github.com/Elgg/data_views)
* foaf views (now plugin: https://github.com/Elgg/semantic_web)
* Default entity page handler

## Documentation
* Shiny new rST docs (hosted at http://learn.elgg.org)
* Various improvements to source code comments

## Security Enhancements
* Using SSL for setting password when https login enabled
* Make several views files non-executable

## Bugfixes
* HTMLawed Strips html comments and CDATA from input
* Hundreds of miscellaneous fixes
* users can edit metadata that they created by default
* removes special check to allow access override
* if no container, default to false for writing to container
* fixes default user access
* returning false to create events forces delete regardless of access
* Fix json and xml views broken by wrap view of developer tools
* Do not use link with file icon when using full_view.
* made page shells consistent for $vars parameters
* show owner block also if looking at owned pages
* Pagination uses HTTP referrer as default base_url for Ajax requests
* Added several missing translation strings
* standardizes layouts so that they all have title buttons and the same basic sections
* entity list limit respects passed limits and just provides defaults
* fixes setting page owner due to routing change
* Fixed batch install usage of createHtaccess
* fixed typo that prevented context for front page from being set
* Make sure empty string return is interpreted as "handling" the list hook
* replaced double search box with a single box and a single searchhook
* Login, user event code can use elgg_get_logged_in_user_*()
* Make sure user has access to both river object and target
* Uses correct default value for find_active_users 'seconds' parameter
* Added jquery map file and unminified version to make Chrome dev tools happy and not throw 404 error
* Corrects container write permissions bug
* Sends correct Content-Length with profile icon
* Getting correct client IP behind proxy.
* Fixed old function name for batch metastring operations
* allow full access to the metadata API through setMetadata() rather than requiring use of create_metadata()
* catching when the base entity is not created due to permissions override
* message if no results found
* all link should reset entity type/subtype
* forces lastcache to be an int
* Many more miscellaneous improvements...


# v1.8.19 (March 12, 2014)

## Contributing Developers
* Brett Profitt
* Centillien
* Evan Winslow
* Ismayil Khayredinov
* Jerome Bakker
* Juho Jaakkola
* Matt Beckett
* RiverVanRain
* Sem
* Steve Clay
* pattyland

## Security enhancements
* Implements stronger remember me cookie strategy to prevent brute force attacks.

## Bugfixes
* Fixed numerous PHP warnings.
* Groups: Corrected breadcrumb for group discussion pages.
* Fixed RSS validation for the River RSS feed.

## Improvements
* Moved Site Secret update to configure -> advanced.
* Added more comprehensive tests for HTMLAwed.

## Documentation
* Added better deprecation warnings for use of certain attributes in views.


# v1.8.18 (January 11, 2014)

## Contributing Developers
* Juho Jaakkola
* Steve Clay

## Bugfixes
* Fixes notify_user() broken in 1.8.17


# v1.8.17 (January 1, 2014)

## Contributing Developers
* Brett Profitt
* Cash Costello
* Ed Lyons
* Evan Winslow
* Jeroen Dalsem
* Jerome Bakker
* Juho Jaakkola
* Matt Beckett
* Paweł Sroka
* Sem
* Steve Clay

## Security Fixes
* Specially-crafted request could return the contents of sensitive files.
* Reflected XSS attack was possible against 1.8 systems.
* The cryptographic key used for various purposes may have been generated with weak entropy, particularly on Windows.

## Bugfixes
* URLs with non-ASCII usernames again work
* Floated images are now properly cleared in content areas
* The activity page title now matches the document title
* Search again supports multiple comments on the same entity
* Blog archive sidebar now reverse chronological
* URLs with matching parens can now be auto-linked
* Log browser links for users now work
* Disabling over 50 objects should no longer result in an infinite loop
* Radio/checkbox inputs no longer have border radius (for IE10)
* User picker: the Only Friends checkbox again works
* Group bookmarklet no longer shown to non-members
* Widget reordering fixed when moving across columns
* Refuse to deactivate plugins needed as dependencies

## Enhancements
* Group member listings are ordered by name
* The system_log table can now store IPv6 addresses
* Web services auth_gettoken() now accepts email address
* List functions: no need to specify pagination for unlimited queries
* Htmlawed was upgraded to 1.1.16


# v1.8.16 (June 25, 2013)

## Contributing Developers
* Brett Profitt
* Cash Costello
* Jeff Tilson
* Jerome Bakker
* Paweł Sroka
* Steve Clay

## Security Fixes
* Fixed avatar removal bug (thanks to Jerome Bakker for the first report of this)

## Bugfixes
* Fixed infinite loop when deleting/disabling an entity with > 50 annotations
* Fixed deleting log tables in log rotate plugin
* Added full text index for groups if missing
* Added workaround for IE8 and jumping user avatar
* Fixed pagination for members pages
* Fixed several internal cache issues
* Plus many more bug fixes


# v1.8.15 (April 23, 2013)

## Contributing Developers
* Cash Costello
* Ismayil Khayredinov
* Jeff Tilson
* Juho Jaakkola
* Matt Beckett
* Paweł Sroka
* Sem
* Steve Clay
* Tom Voorneveld

## Bugfixes
* Not displaying http:// on profiles when website isn't set
* Fixed pagination display issue for small screens
* Not hiding subpages of top level pages that have been deleted
* Stop corrupting JavaScript views with elgg deprecation messages
* Fixed out of memory error due to query cache
* Fixed bug preventing users authorizing Twitter account access
* Fixed friends access level for editing pages
* Fixed uploading files within the embed dialog

## Enhancements
* Added browser caching of language JS files
* Adding nofollow on user posted URLs for spam deterrence (thanks to Hellekin)
* Auto-registering views for simplecache when their URL is requested
* Display helpful message for those who have site URL configuration issues
* Can revert to a previous revision with pages plugin
* Site owners can turn off posting wire messages to Twitter
* Search results are sorted by relevance

## Removed Functionality
* Twitter widget due to changes in Twitter API and terms of service
* OAuth API plugin due to conflicts with the Twitter API plugin


# v1.8.14 (March 12, 2013)

## Contributing Developers
* Aday Talavera
* Brett Profitt
* Cash Costello
* Ed Lyons
* German Bortoli
* Hellekin Wolf
* iionly
* Jerome Bakker
* Luciano Lima
* Matt Beckett
* Paweł Sroka
* Sem
* Steve Clay

## Security Fixes
* Fixed a XSS vulnerability when accepting URLs on user profiles
* Fixed bug that exposed subject lines of messages in inbox
* Added requirement for CSRF token for login

## Bugfixes
* Strip html tags from tag input
* Fixed several display issues for IE7
* Fixed several issues with blog drafts
* Fixed repeated token timeout errors
* Fixed JavaScript localization for non-English languages

## Enhancements
* Web services fall back to json if the viewtype is invalid


# v1.8.13 (January 29, 2013)

## Contributing Developers
* Cash Costello
* Juho Jaakkola
* Kevin Jardine
* Krzysztof Różalski
* Steve Clay

## Security Fixes
* Added validation of Twitter usernames in Twitter widget

## Bugfixes
* CLI usages with walled garden fixed
* Upgrading from < 1.8 to 1.8 fixed
* Default widgets fixed
* Quotes in object titles no longer result in "qout" in URLs
* List of my groups is ordered now
* Language string river:comment:object:default is defined now
* Added language string for comments: generic_comment:on

## Enhancements
* Added confirm dialog for resetting profile fields (adds language string profile:resetdefault:confirm)


# v1.8.12 (January 4th, 2013)

## Contributing Developers
* Brett Profitt
* Cash Costello
* Jerome Bakker
* Matt Beckett
* Paweł Sroka
* Sem
* Steve Clay

## Bugfixes
* Added an AJAX workaround for the rewrite test.
* Code cleanup to prevent some notices and warnings.
* Removed "original_order" in menu item anchor tags.
* Site menu's selected item correctly persists through content pages.
* Static caches rewritten and improved to prevent stale data being returned.
* Installation: Invalid characters in admin username are handled correctly.
* Messages: Fixed inbox link in email notifications.
* The Wire: Fixed objects not displaying correctly when upgrading from 1.7.

## Enhancements
* Performance improvements and improved caching in entity loading.
* Added upgrade locking to prevent concurrent upgrade attempts.
* Replaced xml_to_object() and autop() with GPL / MIT-compatible code.
* Error messages (register_error()) only fade after being clicked.
* Groups: Added a sidebar entry to display membership status and a link to
 group notification settings.
* Groups: Added pending membership and invitation requests to the sidebar.
* Groups: Better redirection for invisible and closed groups.
* Search: User profile fields are searched.
* Pages: Subpages can be reassigned to new parent pages.
* Twitter: Login with twitter supports persistent login and correctly forwards
 after login.


# v1.8.11 (December 5th, 2012)

## Bugfixes
* Fixed fatal error in group creation form


# v1.8.10 (December 4th, 2012)

## Contributing Developers
* Krzysztof Różalski
* Lars Hærvig
* Paweł Sroka
* RiverVanRain
* Sem
* Steve Clay

## Security Enhancements
* Cached metadata respects access restrictions to fix problems with profile
 field display.
* Group RSS feeds are restricted to valid entities

## Enhancements
* UX: Added a list of Administrators in the admin area
* UX: Limiting message board activity stream entries to excerpts
* Performance: Prefetching river entries
* Performance: Plugin entities are cached

## Bugfixes
* Removed superfluous commas in JS files to fix IE compatibility.
* API: Fixed Twitter API.
* Performance: Outputting valid ETags and expires headers.


# v1.8.9 (November 11, 2012)

## Contributing Developers
* Brett Profitt
* Cash Costello
* Evan Winslow
* Jeroen Dalsem
* Jerome Bakker
* Matt Beckett
* Paweł Sroka
* Sem
* Steve Clay

## Security Enhancements
* Sample CLI installer cannot break site
* Removed XSS vulnerabilities in titles and user profiles

## Enhancements
* UX: A group's owner can transfer ownership to another member
* UX: Search queries persist in the search box
* Several (X)HTML validation improvements
* Improved performance via more aggressive entity and metadata caching
* BC: 1.7 group profile URLs forward correctly

## Bugfixes
* UX: Titles containing HTML tokens are never mangled
* UX: Empty user profile values saved properly
* UX: Blog creator always mentioned in activity stream (not user who published it)
* UI: Fixed ordering of registered menu items in some cases
* UI: Embed dialog does not break file inputs
* UI: Datepicker now respects language
* UI: More reliable display of access input in widgets
* UI: Group edit form is sticky
* UI: Site categories are sticky in forms
* API: Language fallback works in Javascript
* API: Fallback to default viewtype if invalid one given
* API: Notices reported for missing language keys
* Memcache now safe to use; never bypasses access control
* BC: upgrade shows comments consistently in activity stream


# v1.8.8 (July 11, 2012)

## Contributing Developers
* Cash Costello
* Miguel Rodriguez
* Sem

## Enhancements
* Added a delete button on river items for admins

## Bugfixes
* Fixed the significant bug with htmlawed plugin that caused duplicate tags


# v1.8.7 (July 10, 2012)

## Contributing Developers
* Cash Costello
* Evan Winslow
* Ismayil Khayredinov
* Jeroen Dalsem
* Jerome Bakker
* Matt Beckett
* Miguel Rodriguez
* Paweł Sroka
* Sem
* Steve Clay

## Enhancements
* Better support for search engine friendly URLs
* Upgraded htmlawed (XSS filtering)
* Internationalization support for TinyMCE
* Public access not available for walled gardens
* Better forwarding and messages when they cannot view content because logged out

## Bugfixes
* Fatal errors due to type hints downgraded to warnings
* Group discussion reply notifications work again
* Sending user to inbox when deleting a message
* Fixed location profile information when it is an array
* Over 30 other bug fixes.


# v1.8.6 (June 18, 2012)

## Contributing Developers
* Cash Costello
* Evan Winslow
* Ismayil Khayredinov
* Jeff Tilson
* Jerome Bakker
* Paweł Sroka
* Sem
* Steve Clay

## Enhancements
* New ajax spinner
* Detecting docx, xlsx, and pptx files in file plugin
* Showing ajax spinner when uploading file with embed plugin

## Bugfixes
* Fixed some language caching issues.
* Users can add sub-pages to another user's page in a group.
* Over 30 other bug fixes.


# v1.8.5 (May 17, 2012)

## Contributing Developers
* Brett Profitt
* Evan Winslow
* Sem
* Steve Clay
* Jeroen Dalsem
* Jerome Bakker

## Security Enhancements
* Fixed possible XSS vulnerability if using a crafted URL.
* Fixed exploit to bypass new user validation if using a crafted form.
* Fixed incorrect caching of access lists that could allow plugins
to show private entities to non-admin and non-owning users. (Non-exploitable)

## Bugfixes
* Twitter API: New users are forwarded to the correct page after creating
             an account with Twitter.
* Files: PDF files are downloaded as "inline" to display in the browser.
* Fixed possible duplication errors when writing metadata with multiple values.
* Fixed possible upgrade issue if using a plugin uses the system_log hooks.
* Fixed problems when enabling more than 50 metadata or annotations.

## API
* River entries' timestamps use elgg_view_friendly_time() and can be
 overridden with the friendly time output view.


# v1.8.4 (April 24, 2012)

## Contributing Developers
* Adayth Talavera
* Brett Profitt
* Cash Costello
* Evan Winslow
* Ismayil Khayredinov
* Janek Lasocki-Biczysko
* Jerome Baker
* Sem
* Steve Clay
* Webgalli

## Security Enhancements
* Fixed an issue in the web services auth.get_token endpoint that
would give valid auth tokens to invalid credentials. Thanks to
Christian for reporting this!
* Fixed an that could show which plugins are loaded on a site.

## Enhancements
* UI: All bundled plugins' list pages display a no content message if there is nothing to list.
* UI: Site default access is limited to core access levels.
* UI: Showing a system message to the admin if plugins are disabled with the "disabled"
magic file.
* UI: Added transparent backgrounds for files and pages icons.
* External (Site) Pages: If in Wall Garden mode, Site Pages use the Walled Garden
theme when logged out.
* UI: Database errors only show the query to admin users.
* UI: Cannot set the data path to a relative path in installation or site settings.
* UI: Cleaned up notifications for bundled plugins.
* UI: Hiding crop button if no avatar is uploaded.
* UI: Bundled plugins are displayed with a gold border in the plugin admin area.
* UI: Can see all the categories a plugin belongs to.
* Web Services: Multiple tokens allowed for users.
* API: More efficient entity loading.
* API: Added IP address to system log.
* API: Languages are cached.
* API: ElggBatch supports disabling offsets for callbacks that delete entities.
* API: Cleaned up the boot process.
* API: Fixed situation in which the cache isn't properly cleared if a file can't be unlinked.

## Bugfixes
* UI: Tags display in the case they were saved.
* UI: Friendly titles keep -s.
* UI: Removed pagination in friends widget.
* UI: Profile settings actions correctly displays error messages as errors.
* UI: Tag search works for tags with spaces.
* UI: Fixed river display for friending that happens during registration.
* Groups: Link for managing join requests is restored in the sidebar.
* Walled Garden: Cron and web services endpoints are exposed as public sites.
* The Wire: UTF usernames are correctly linked with @ syntax.
* The Wire: No longer selecting the "Mine" tab for users who aren't you.
* Blogs: Notifications restored.
* Message Board: Fixed delete.
* Groups: Forwarding to correct page if trying to access closed group.
* API: entities loaded via elgg_get_entities_from_relationship() have the correct time_created.
* API: Deleting entities recursively works when code is logged out.
* API: Fixed multiple uses of deprecated functions.


# v1.8.3 (January 12, 2012)

## Enhancements
* Adds a white list for ajax views
* Improved navigation tab options
* Added group specific search
* Added button for reverting avatar
* Improved documentation for core class attributes
* Adds a server info page under administer -> statistics
* Improving caching of icons and js/css
* Deprecation notices not displayed to non-admin users

## Bugfixes
* Fixed upgrade scripts for blog posts and groups forum posts
* Can now delete invitations to invisible groups
* Fixed several widget bugs
* Fixed access level on add to group river item
* Fixed recursive entity enabling
* Fixed limit on pages in sidebar navigation
* Fixed deletion of large numbers of annotations


# v1.8.2 (December 21, 2011)

## Enhancements
* Added a 404 page
* Widgets controls now using the menu system
* Admins can edit users' account information
* Embed uploader supports uploading into groups
* Add a control panel widget for easy access to cache flushing and upgrading
* Comments now have a unqiue URL with fragment identifier
* JavaScript language files are cacheable
* jQuery form script only loaded when required

## Bugfixes
* Fixed default widgets
* Fixed activity filtering
* Embedding an image now inserts a medium sized image
* Search plugin only uses mbstring extension if enabled
* Site pages links returned to footer
* Fixed URL creation for users with non-ASCII characters in username
* The wire username parsing supports periods in usernames
* Returned the posting area to the main wire page
* Fixed layout issue on pages with a fragment identifier in URL
* Added support for call elgg_load_js() in header and footer
* Fixed user picker
* Fixed uservalidationbyemail plugin ignoring the actions of other plugins
* Fixed bug preventing the creation of admin users
* Fixed deleting a widget with JavaScript disabled
* Fixed many bugs in the unit/integration tests


# v1.8.1 (November 16, 2011)

## Enhancements
* Completed styling of user validation admin page
* Adding rel=nofollow for non-trusted links
* Added direct icon loading for profile avatars in profile plugin
* Improved the structure of content views to make styling easier
* Updated version of jQuery to 1.6.4
* Added basic support for icon size customization
* Added a toggle for gallery/list view in file plugin
* Added support for passing CSS classes to icon views
* Added support for non http URLs to Elgg's normalize functions
* Added better support for the 404 forward if a page handler does handle a request

## Bugfixes
* Fixed autocomplete and userpicker
* Fixed RSS and web service-related view types
* Fixed walled garden display issues
* Added work around for IE/TinyMCE/embed insert problem
* Implemented ElggUser.isAdmin() JavaScript method
* Fixed the date views and JavaScript datepicker
* Fixed horizontal radio buttons styling
* Modules only display header if there is content for it


# v1.8.1b (October 11, 2011)

## Enhancements
* New group activity widget for user dashboard.
* Added more sprites.
* version.php information cached instead of loaded 100s of times.
* Added class elgg-autofocus to add focus on inputs when the page loads.
* Admins can edit user avatars again.
* Added a filter for non-bundled plugins in plugin admin.
* Improvements to admin area theme.

## Bugfixes
* Fixed site dropdown menu for IE.
* ElggEntity->deleteMetadata() no longer deletes all metadata ever if
called on an unsaved entity.
* Fixed Embed plugin.
* Fixed activate and deactivate all plugins.
* Fixed URL for group membership request in notification email.
* Fixed log browser plugin's admin area display.
* Fixed RSS icon not showing up on some pages.
* Fixed river entries for forum posts that were lost if upgrading from 1.7.
* Better displaying of errors when activating, deactivating, or
reordering plugins.
* Fixed Developer Plugin's inspection tool.
* Fixed avatar cropping on IE 7.
* Bookmarks plugin accepts URLs with dashes.
* "More" menu item on site menu hidden if items are manually specified.
* Fixed hover menu floating if unrestrained.
* JS init, system fired when DOM and languages are read.
* Fixed the date picker input view.
* Fixed stack overflow when calling elgg_view() from a pagesetup
event.
* Menu links no longer have empty titles and confirm attributes.
* Fixed crash when attempting to change password to an invalid value.
* Fixed "More groups" link for groups widget.
* Fixed output/confirmlink to use a default question if not specified.
* Added missing language strings. Also added "new", "add", and "create".
* Registered security token refresh page as external to avoid token refresh
problems on Walled Garden sites.
* Displaying more accurate message if uploading an avatar fails.
* "Leave group" button doesn't display for group owners.
* Request group membership button displays only when logged in.
* Fixed the number of displayed items for Bookmarks widget.
* Fixed fallback to deprecated views for widgets.

## API Changes
* Menus names must be unique to the entire menu, not just section.
* Input views that encode text use the option 'encode_text'.
* Added ElggPlugin->getFriendlyName().
* elgg_view_icon() accepts a class.
* Added hook output:before, page.
* Added hook output:before, layout.
* elgg_get_entities() and related functions return false if passed
valid options with invalid values.
* Can disable the user hover menu by passing hover => false to
elgg_view_icon(). Previously it was override => true.
* Embed plugin uses menu system. See readme for embed plugin.
* Manifest attributes are no longer translated via elgg_echo().
* Fixed livesearch ajax endpoint.
* Fixed site unit test.
* Unit tests tidy up after themselves better.
* forward() throws an exception if headers are already sent.
* Better errors if adding a user through admin area fails.
* Localized profile fields.
* Added 'is_trusted' parameter output/url to avoid escaping and filtering.
Defaults to false.
* Added elgg_unregister_action()
* Fixed ElggPriorityList::rewind().
* Fixed forwarding after login for login-protected pages.
* get_site_by_url() respects class inheritance for subclassing ElggSite.

## Internal changes
* Updated deprecated uses of internalname/id.
* Using wwwroot instead of www_root because of inconsistencies.


# v1.8.0 (Jackie) (September 5th, 2011)

## Notes
Elgg 1.8 contains the most changes in Elgg since the transition from Elgg
0.9 to Elgg 1.0. The core team tried to make the transition as smooth as
possible, but in the interest of following standards and simplifying the
development process for core and third party developers, we have made
changes that will require updating plugins. We believe these changes
will help Elgg development be easier for everyone.

It is unreasonable and unhelpful to list the full details of all changes in
this file. Instead, we will list the high level, overarching changes to
systems. If you are interested in the specifics, Elgg 1.8's source code is
highly documented and serves as a good guide and the git commit log can
provide excruciating details of what has changed between 1.7 and 1.8.

Please post your feedback, questions, and comments to the community site
at http://community.elgg.org. As always, thank you for using Elgg!

--The Elgg Core Development Team

A tip about updating plugins:

It's not difficult to update 1.7 plugins for 1.8. There is a detailed
document outlining this process on the wiki:
http://docs.elgg.org/wiki/Updating_plugins_for_Elgg_1.8

The basic process is:

1. Clean up the plugin to make sure it conforms to coding standards,
 official structure, and best practices.
2. Update any uses of deprecated functions. Functions deprecated in 1.7 will
 produce visible notices in 1.8!
3. Use the new manifest format.
4. Use the new menu functions.
5. Use the new JS features.
6. Update the views to use core CSS helper functions and classes instead of
 writing your own.

The documentation directory and the wiki has more information.

## User-visible changes
* New default theme.
* New installation.
* Separate and updated admin interface.
* Updated plugin themes.

## Generic API changes
* Improved the markup and CSS.
* Restructured and simplified the views layouts.
* Added a new menu system.
* Added new CSS and JS file registration functions.
* Added a JS engine.
* Added a breadcrumb system.
* Added a sticky forms system.

## New plugins
* Dashboard - The activity stream is now the default index page. A 1.7-style
dashboard is provided through the dashboard plugin.
* Developers Plugins - Developer tools.
* Likes - Allows users to "like" other users' content.
* oAuth API - A generic, reusable oAuth library.
* Tag Cloud - A widget-based tag cloud generator.
* Twitter API - A generic Twitter library that allows signin with Twitter
and pushing content to tweets. Replaces twitter_service.

## Deprecated plugins
* captcha - Captchas have long since stopped being useful as a deterrent
against spam.
* crontrigger - Real cron should be used.
* default_widgets - This functionality is now part of core.
* friends - This functionality is now part of core.
* riverdashboard - Displaying the river (activity stream) is default in
core. The original dashboard can be restored by the new Dashboard plugin.
* twitter_service - Replaced by Twitter API.

Elgg 1.8.0.1 was released immediately after 1.8.0 to correct a problem in
installation.

