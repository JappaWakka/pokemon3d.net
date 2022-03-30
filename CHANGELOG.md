# Changelog

All notable changes to this project will be documented in this file.

<a name="0.4.0"></a>

## 0.4.3 - 2022-03-25

## What's Changed

- Bump follow-redirects from 1.14.7 to 1.14.8 by @dependabot in https://github.com/P3D-Legacy/pokemon3d.net/pull/110
- Bump node-forge from 1.2.1 to 1.3.0 by @dependabot in https://github.com/P3D-Legacy/pokemon3d.net/pull/128
- Bump minimist from 1.2.5 to 1.2.6 by @dependabot in https://github.com/P3D-Legacy/pokemon3d.net/pull/129

**Full Changelog**: https://github.com/P3D-Legacy/pokemon3d.net/compare/0.4.2...0.4.3

## 0.4.2 - 2021-12-29

## What's Changed

- Bump Dependencies by @DanielRTRD in https://github.com/P3D-Legacy/pokemon3d.net/pull/91

**Full Changelog**: https://github.com/P3D-Legacy/pokemon3d.net/compare/0.4.1...0.4.2

## 0.4.1 - 2021-12-29

## What's Changed

- Bump league/flysystem from 1.1.3 to 1.1.4 by @dependabot in https://github.com/P3D-Legacy/pokemon3d.net/pull/31
- Tailwind by @DanielRTRD in https://github.com/P3D-Legacy/pokemon3d.net/pull/29
- Release 0.4.0 by @DanielRTRD in https://github.com/P3D-Legacy/pokemon3d.net/pull/30
- Bump composer/composer from 2.1.3 to 2.1.9 by @dependabot in https://github.com/P3D-Legacy/pokemon3d.net/pull/53
- Bump axios from 0.21.1 to 0.21.2 by @dependabot in https://github.com/P3D-Legacy/pokemon3d.net/pull/88
- Bump symfony/http-kernel from 5.3.3 to 5.4.2 by @dependabot in https://github.com/P3D-Legacy/pokemon3d.net/pull/89
- Bump laravel/framework from 8.49.2 to 8.75.0 by @dependabot in https://github.com/P3D-Legacy/pokemon3d.net/pull/90

**Full Changelog**: https://github.com/P3D-Legacy/pokemon3d.net/compare/0.4.0...0.4.1

## [0.4.0](https://github.com/P3D-Legacy/skin.pokemon3d.net/compare/0.3.7...0.4.0) (2021-07-08)

### Added

- Added a new design with Tailwind CSS
- Added maximum characters for names on skins
- Added possibility for users to view other users skins on their profile
- Added a better description of login error from the Game Jolt API

### Fixed

- Fixed old input not showing when failed validation when editing a skin
- Fixed bug where you could import and dupe skins over the slot limit

### Other

- Updated all packages
- Minor tweaks and improvements

<a name="0.3.7"></a>

## [0.3.7](https://github.com/P3D-Legacy/skin.pokemon3d.net/compare/0.3.6...0.3.7) (2021-06-02)

### Fixed

- Fixed where you could see private skins on profile
- Fixed title for user profile

<a name="0.3.6"></a>

## [0.3.6](https://github.com/P3D-Legacy/skin.pokemon3d.net/compare/0.3.5...0.3.6) (2021-06-01)

### Added

- Added user profile [#17](https://github.com/P3D-Legacy/skin.pokemon3d.net/issues/17) & [#16](https://github.com/P3D-Legacy/skin.pokemon3d.net/issues/16)

### Other

- Swapped UUID package
- Updated all other packages
- Minor tweaks and improvements

<a name="0.3.5"></a>

## [0.3.5](https://github.com/P3D-Legacy/skin.pokemon3d.net/compare/0.3.4...0.3.5) (2021-05-10)

### Fixed

- Fixed view of missing files  [#23](https://github.com/P3D-Legacy/skin.pokemon3d.net/issues/23)

### Added

- Added a better server error page

<a name="0.3.4"></a>

## [0.3.4](https://github.com/P3D-Legacy/skin.pokemon3d.net/compare/0.3.3...0.3.4) (2021-05-09)

### Added

- Added Sentry for easier debugging of exceptions

<a name="0.3.3"></a>

## [0.3.3](https://github.com/P3D-Legacy/skin.pokemon3d.net/compare/0.3.2...0.3.3) (2021-04-16)

### Added

- Add admin functionality for uploaded skins [#14](https://github.com/P3D-Legacy/skin.pokemon3d.net/issues/14)

<a name="0.3.2"></a>

## [0.3.2](https://github.com/P3D-Legacy/skin.pokemon3d.net/compare/0.3.1...0.3.2) (2021-04-12)

### Updated

- Updated gamejolt-api with TimeOutException

<a name="0.3.1"></a>

## [0.3.1](https://github.com/P3D-Legacy/skin.pokemon3d.net/compare/0.3.0...0.3.1) (2021-03-11)

### Added

- Added missing pagnitation links [#11](https://github.com/P3D-Legacy/skin.pokemon3d.net/issues/11)

<a name="0.3.0"></a>

## [0.3.0](https://github.com/P3D-Legacy/skin.pokemon3d.net/compare/0.3.0-beta...0.3.0) (2021-02-12)

### Added

- Added a shortcut to uploading skin in the menu
- Added "newest" and "popular" tabs to public skins
- Added pagination for public skins
- Added menu links to the essentials for the game
- Added URL back to home page for the rules
- Added discord webhook to skin uploads
- Added cookieconsent to auth layout
- Added app name to title
- Added icons to buttons and menu
- Added like button to public skins [#1](https://github.com/P3D-Legacy/skin.pokemon3d.net/issues/1)

### Bugfix

- Bugfix for user editing
- Bugfix for browser skin cache issue

### Moved

- Moved newest and popular public skins to each their own routes and views

### Removed

- Removed quick upload from home page

### Updated

- Updated footer version
- Updated "Your Current Skin"-card
- Updated gamejolt card on home page
- Updated counting for popular skins
- Updated skin count check
- Updated isPublic function for Skin
- Updated some redirects
- Updated favicon on auth layout
- Updated title of header
- Updated user editing for admins

<a name="0.3.0-beta"></a>

## [0.3.0-beta](https://github.com/P3D-Legacy/skin.pokemon3d.net/compare/0.2.2...0.3.0-beta) (2021-01-29)

### Added

- Added [#1](https://github.com/P3D-Legacy/skin.pokemon3d.net/issues/1) and [#2](https://github.com/P3D-Legacy/skin.pokemon3d.net/issues/2)
- Added a duplicate key for storing current skin to slots
- Added GitHubHelper
- Added link to changelog on app version in footer

### Changed

- Changed routing for [#1](https://github.com/P3D-Legacy/skin.pokemon3d.net/issues/1) and [#2](https://github.com/P3D-Legacy/skin.pokemon3d.net/issues/2)
- Changed primarykey for gjuser
- Changed the player skin routes and controller

### Fixed

- Fixed scaling of skins on the player skins page

### Updated

- Updated styling
- Updated footer

<a name="0.2.2"></a>

## [0.2.2](https://github.com/P3D-Legacy/skin.pokemon3d.net/compare/0.2.1...0.2.2) (2021-01-26)

### Updated

- Updated user editing for admins

<a name="0.2.1"></a>

## [0.2.1](https://github.com/P3D-Legacy/skin.pokemon3d.net/compare/0.2.0...0.2.1) (2021-01-26)

### Updated

- Updated skin information
- Updated file validation for skin upload
- Updated file size formatting for admins

### Removed

- Remove a old folder from 0.1.0 causing issues

<a name="0.2.0"></a>

## [0.2.0](https://github.com/P3D-Legacy/skin.pokemon3d.net/compare/0.1.0...0.2.0) (2021-01-26)

### Added

- Added gradient and logo to navbar
- Added local favicon
- Added link back to main website on login
- Allow users to see Skin Deletion Activity
- Added User functions for admin [#4](https://github.com/P3D-Legacy/skin.pokemon3d.net/issues/4)
- Let admins see the skin images for other players [#4](https://github.com/P3D-Legacy/skin.pokemon3d.net/issues/4)
- Allow admins to delete skins with a reason [#4](https://github.com/P3D-Legacy/skin.pokemon3d.net/issues/4)

<a name="0.1.0"></a>

## [0.1.0](https://github.com/P3D-Legacy/skin.pokemon3d.net/compare/0.1.0-beta...0.1.0) (2021-01-25)

### Added

- Added ability to upload skin
- Added game release details to home page
- Added update command to save tag to project
- Added a footer

### Changed

- Changed skin url from `skins` to `player`

<a name="0.1.0-beta"></a>

## 0.1.0-beta (2021-01-24)

### Initial release

- Added ability to import skin from old site
