<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Heroku Button Sample Application</title>
    <link rel="stylesheet" type="text/css" href="slds/assets/styles/salesforce-lightning-design-system.css" />

<style>
  .wrapper {
    margin:72px auto 0px auto;
    padding: 12px;
    max-width: 512px;
    border: 1px solid #ddd;
    background-color: #efefef;
  }
</style>

  </head>
  <body>

<!-- ヘッダー -->
<header class="slds-global-header_container"><a href="javascript:void(0);" class="slds-assistive-text slds-assistive-text--focus">Skip to Navigation</a><a href="javascript:void(0);" class="slds-assistive-text slds-assistive-text--focus">Skip to Main Content</a>
  <div class="slds-global-header slds-grid slds-grid--align-spread">
    <div class="slds-global-header__item">
      <div class="slds-global-header__logo">
        <img src="slds/assets/images/logo-noname.svg" alt="" />
      </div>
    </div>
    <div class="slds-global-header__item slds-global-header__item--search">
      <div class="slds-form-element slds-lookup">
        <label class="slds-assistive-text" for="global-search-01">Search Salesforce</label>
        <div class="slds-form-element__control slds-input-has-icon slds-input-has-icon--left">
          <svg aria-hidden="true" class="slds-input__icon">
            <use xlink:href="slds/assets/icons/utility-sprite/svg/symbols.svg#search"></use>
          </svg>
          <input id="global-search-01" class="slds-input slds-lookup__search-input" type="search" placeholder="Search Salesforce" />
        </div>
      </div>
    </div>
    <ul class="slds-global-header__item slds-grid slds-grid--vertical-align-center">
      <li class="slds-dropdown-trigger slds-dropdown-trigger--click slds-m-left--x-small">
        <button class="slds-button" title="person name" aria-haspopup="true">
          <span class="slds-avatar slds-avatar--circle slds-avatar--medium">
            <img src="slds/assets/images/avatar2.jpg" alt="person name" />
          </span>
        </button>
      </li>
    </ul>
  </div>
</header>

<!-- フィード -->
    <article class="slds-post wrapper">
  <header class="slds-post__header slds-media slds-media--center">
    <div class="slds-media__figure">
      <a href="javascript:void(0);" title="Jason Rodgers" class="slds-avatar slds-avatar--circle slds-avatar--large">
        <img src="slds/assets/images/avatar1.jpg" alt="Jason Rodgers" />
      </a>
    </div>
    <div class="slds-media__body">
      <div class="slds-grid slds-grid--align-spread slds-has-flexi-truncate">
        <p><a href="javascript:void(0);" title="Jason Rodgers">Heroku Button Sample App</a> — <a href="javascript:void(0);" title="Design Systems">
          <?php
            $name = getenv('YOUR_NAME');
            printf($name);
          ?>
          さん
        </a></p>
      </div>
      <p class="slds-text-body--small"><a href="javascript:void(0);" title="Click for single-item view of this post" class="slds-text-link--reset">たった今</a></p>
    </div>
  </header>
  <div class="slds-post__content slds-text-longform">
    <p>
      <?php
        $name = getenv('YOUR_NAME');
        printf($name);
      ?>
      さん、ようこそ！Herokuの世界へ
    </p>
  </div>
  <footer class="slds-post__footer">
    <ul class="slds-post__footer-actions-list slds-list--horizontal">
      <li class="slds-col slds-item slds-m-right--medium">
        <a href="javascript:void(0);" title="Like this item" class="slds-post__footer-action">
          <svg aria-hidden="true" class="slds-icon slds-icon-text-default slds-icon--x-small slds-align-middle">
            <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#like"></use>
          </svg>Like</a>
      </li>
      <li class="slds-col slds-item slds-m-right--medium">
        <a href="javascript:void(0);" title="Comment on this item" class="slds-post__footer-action">
          <svg aria-hidden="true" class="slds-icon slds-icon-text-default slds-icon--x-small slds-align-middle">
            <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#share_post"></use>
          </svg> Comment</a>
      </li>
      <li class="slds-col slds-item slds-m-right--medium">
        <a href="javascript:void(0);" title="Share this item" class="slds-post__footer-action">
          <svg aria-hidden="true" class="slds-icon slds-icon-text-default slds-icon--x-small slds-align-middle">
            <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#share"></use>
          </svg> Share</a>
      </li>
    </ul>
    <ul class="slds-post__footer-meta-list slds-list--horizontal slds-has-dividers--right slds-text-title">
      <li class="slds-item">1 shares</li>
      <li class="slds-item">1 views</li>
    </ul>
  </footer>
</article>

  </body>
</html>
