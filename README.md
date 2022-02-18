<p align="center">
  <a href="https://github.com/itplusx/flexible_news" rel="noopener noreferrer">
    <img src="https://raw.githubusercontent.com/itplusx/flexible_news/master/Resources/Public/Icons/Logo.png" alt="TYPO3 EXT:flexible_news">
  </a>
</p>

# TYPO3 Extension `flexible_news`

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

Create **news articles based on normal pages** in TYPO3 and display them as a list in the frontend.

Using pages instead of records has the following advantages:
- **No extra TCA required**  
  Since this extension uses the default pages of TYPO3 and it's TCA fields, it's not necessary to have extra TCA
  field declarations. (unless you need additional fields)
- **No extra database tables**  
  This extension only uses the `pages` table and therefore no extra tables are needed. This prevents bloating the
  database with additional tables and fields.
- **No `routeEnhancers` hassle**  
  The url of the news article will be representing the page tree and will work out of the box. No need to add 
  `routeEnhancers`. The slug of every article can be changed with the `slug` field and is not bound to the article
  title.
- **Construct flexible articles with available content elements without being bound to a pre-defined markup**  
  When using records as news articles the markup for every article is pre-defined in the templates.  
  While with pages as news, every article can be build differently with content elements without being bound to a fixed
  template.

This extension utilizes [EXT:flexible_pages](https://github.com/itplusx/flexible_pages) to create a custom "News"
pageType and a template for the list content element.


## Installation

### Extension installation

#### Installation with [`composer`](https://getcomposer.org/) (recommended)
```
composer require itplusx/flexible_news
```

#### Installation with the [TYPO3 Extension Manager](https://docs.typo3.org/typo3cms/GettingStartedTutorial/ExtensionManager/Index.html#installing-a-new-extension)
Use the Extension Key `flexible_news` in the
[TYPO3 Extension Manager](https://docs.typo3.org/m/typo3/guide-installation/master/en-us/ExtensionInstallation/Index.html#extension-installation).

**NOTE: This extension requires [EXT:flexible_pages](https://github.com/itplusx/flexible_pages) to be installed.**

### Include TypoScript

#### Base TypoScript
After a successful install just
[include the TypoScript](https://docs.typo3.org/m/typo3/reference-typoscript/master/en-us/UsingSetting/Entering.html#include-typoscript-files)
for the News List CE and you are all set.

#### CSS TypoScript (optional)
If you want to use the CSS for the News List CE that is shipped with this extension you have to include the
*Flexible News CSS (optional)* TypoScript as well.

## Usage

When everything is installed correctly you should see a new page icon above your page tree in the TYPO3 backend. From
there you could just pull it down into the page tree like with every other page.

**NOTE: If you don't see that icon at first, try to clear the cache and reload the entire page.**

### List View
You can add the _"Pages of selected doktypes"_ content element to every page to render a list of articles by doktype in
the frontend. The content element already comes with a "News" template to render the list accordingly.

#### Override List Template
You can override the List CE template. To do that you have to extend the FLUIDTEMPLATE rootPaths. You can either do this in
your own extension by extending the `lib.contentElement` TypoScript
(as described [HERE](https://docs.typo3.org/m/typo3/reference-coreapi/master/en-us/ApiOverview/ContentElements/AddingYourOwnContentElements.html#configure-the-frontend-template))
or you could use the constants provided by flexible_news:
- `plugin.tx_flexiblenews.templateRootPath`
- `plugin.tx_flexiblenews.partialRootPath`
- `plugin.tx_flexiblenews.layoutRootPath`

#### Extend List Templates
When more News List Templates are required (e.g News List without images) the template select can be extended.

Please have a look at the documentation of [EXT:flexible_pages](https://github.com/itplusx/flexible_pages) or see
[how it's done in flexible_news for the "News" template](https://github.com/itplusx/flexible_news/blob/master/ext_localconf.php).

### Detail View
The detail view is just a view of the page (with the default page template). However sometimes it might be quite useful 
to have a special page template for just the news articles (e.g to show specific content on every news article).

#### Adding News Article Page Template
Assuming you want to add social media share buttons to every news article you have to do the following.

- Add TypoScript for special dokType to override FLUIDTEMPLATE:  
```
[page["doktype"] == 87]
    page.10 {
        templateName >
        templateName = News

        variables {
            socialMediaShare =< lib.socialMediaShare
        }
    }
[GLOBAL]
```

- Add the previously defined variable to the template file wherever the share buttons should appear:  
`<f:format.html parseFuncTSPath="">{socialMediaShare}</f:format.html>`

## Contribution
Any help on this project is very welcome! May it be as code contribution or just an idea for improvement. But we would
like to ask you to follow some rules:

- **Issues:**  
  When adding issues please always describe the bug/feature/task as detailed as possible. Only providing a title is not
  enough. Please use issue templates.
- **Commits:**  
  Our team is following the [Conventional Commits](https://www.conventionalcommits.org/). We would like ask you stick to
  these rules whenever you want to contribute.
- **Pull Requests:**  
  Before you submit a PR please create an issue first and link it to the pull request or at least add a PR description 
  with detailed information about what this PR does. Otherwise we are not able to decide if this PR is worth going into
  the main branch.

---

<p align="center">
  <a href="https://itplusx.de" target="_blank" rel="noopener noreferrer">
    <img width="350" src="https://itplusx.de/banners/created-by-X-with-passion.svg" alt="ITplusX - Internetagentur & Systemhaus">
  </a>
</p>

---
