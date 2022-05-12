<?php
/**
 * Plugin Name: Air Light Demo Content
 *
 * Plugin URI: https://github.com/digitoimistodude/air-light-demo-content
 * Description: Provides the demo CSS and Gutenberg block for Air-light starter theme as presented in airwptheme.com/demo.
 * Version: 1.0.6
 * Author: Digitoimisto Dude Oy
 * Author URI: https://www.dude.fi
 * Requires at least: 5.0
 * Tested up to: 5.9.3
 * License: GPL-3.0+
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 *
 * Text Domain: air-light
 *
 * @Author: Timi Wahalahti
 * @Date:   2021-05-17 13:27:24
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2022-02-08 17:08:22
 *
 * @package air-light
 */

add_filter( 'air_light_theme_settings', function( $settings ) {
  $settings['acf_blocks'][] = [
    'name'      => 'demo-content',
    'title'     => 'Demo content',
  ];

  return $settings;
});

add_filter( 'theme_file_path', function( $path, $file ) {
  if ( 'template-parts/blocks/demo-content.php' === $file ) {
    return plugin_dir_path( __FILE__ ) . 'block-demo-content.php';
  }

  return $path;
}, 10, 2 );

// Add demo CSS
add_action( 'wp_head', 'demo_css' );
add_action( 'admin_head', 'demo_css' );

function demo_css() { ?>
<style>
:root {
  --color-wild-blue-yonder: #737fbf;
  --color-baby-blue: #60f4ea;
  --color-heliotrope: #866cff;
  --color-wild-blue-yonder-rgb: rgb(115, 127, 191);
  --color-border-demo-header: rgba(115, 127, 191, .5);
}

@media (min-width: 960px) {
  body .nav-container {
    background-color: var(--color-main);
  }
}

body .site-header .site-title {
  margin: 0;
}

body .site-header .site-title svg {
  transition: transform 1s ease-in;
}

@media screen and (prefers-reduced-motion: reduce), (update: slow) {
  body .site-header .site-title svg {
    transition: none;
  }
}

body .site-header .site-title .clr-i-solid-path-2 {
  fill: #fff;
}

body .site-header .site-title a {
  color: var(--color-baby-blue);
  display: flex;
  align-items: center;
}

body .site-header .site-title a:hover svg {
  transition: transform .4s cubic-bezier(.6, -0.68, .73, .04);
  transform: translate(260%, -220%);
}

@media screen and (prefers-reduced-motion: reduce), (update: slow) {
  body .site-header .site-title a:hover svg {
    transition: none;
    transform: none;
  }
}

body .site-header .site-title a:hover svg .clr-i-solid-path-2 {
  display: block !important;
  fill: #60f4ea;
}

body .site-header .site-title .logo-name {
  content: "Air";
  display: block;
  text-transform: lowercase;
  letter-spacing: .1em;
  font-weight: var(--font-weight-paragraphs);
  color: var(--color-white);
  margin-left: .75rem;
  font-size: 2.2rem;
}

body .block.block-entry-header-demo {
  background-color: var(--color-valhalla);
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  max-height: 80rem;
  height: 60vh;
  max-width: 100%;
  margin: 0 auto;
}

@media (max-width: 600px) {
  body .block.block-entry-header-demo {
    height: auto;
    padding: 0;
  }
}

@media (min-width: 480px) {
  .block.block-entry-header-demo {
    min-height: 60rem;
  }
}

@media (max-width: 480px) {
  .block.block-entry-header-demo {
    padding-top: 6rem;
    padding-bottom: 6rem;
  }
}

.block.block-entry-header-demo .shade {
  opacity: .4;
}

.block.block-entry-header-demo .inner {
  display: grid;
  grid-template-rows: 1fr 1fr;
  /* autoprefixer: off */
  align-items: center;
  max-height: 100%;
  justify-items: center;
  padding: 2rem;
  max-width: 1200px;
  margin-top: calc(var(--height-navigation-mobile) / 2);
}

@media (max-width: 500px) {
  .block.block-entry-header-demo .inner {
    margin-top: 0;
  }
}

@media (min-width: 770px) {
  .block.block-entry-header-demo .inner {
    padding: 0;
    display: grid;
    grid-template-rows: none;
    grid-template-columns: 3fr 5fr;
    max-width: 800px;
  }
}

@keyframes plane-container {
  0% {
    overflow: visible;
  }

  80% {
    overflow: hidden;
  }

  100% {
    overflow: hidden;
  }
}

.block.block-entry-header-demo .logo {
  color: var(--color-baby-blue);
  border-top: 2px solid var(--color-border-demo-header);
  border-right: 0;
  width: 100%;
  text-align: center;
  order: 2;
  overflow: visible;
  animation: plane-container 10s linear 1s infinite;
}

.block.block-entry-header-demo .logo .logo-name {
  display: none;
}

@keyframes plane {
  0% {
    transform: translate(-200%, 140%);
  }

  10% {
    transform: translate(0, 0);
    opacity: 1;
  }

  85% {
    transform: translate(0, 0);
    opacity: 1;
  }

  95% {
    transform: translate(140%, -100%);
  }

  97% {
    opacity: 0;
  }

  100% {
    transform: translate(0, 0);
  }
}

.block.block-entry-header-demo .logo svg {
  padding: 2rem;
  height: auto;
  width: 100%;
  max-width: 28rem;
  opacity: 0;
  transform: translate(-100%, 100%);
  animation: plane 5s cubic-bezier(.86, 0, .07, 1) 1s infinite;
  animation-delay: -5s;
  position: relative;
}

@media screen and (prefers-reduced-motion: reduce), (update: slow) {
  .block.block-entry-header-demo .logo svg {
    animation: none;
    transform: none;
    opacity: 1;
  }
}

@media (max-width: 800px) {
  .block.block-entry-header-demo .logo svg {
    max-width: 20rem;
  }
}

@media (max-width: 480px) {
  .block.block-entry-header-demo .logo svg {
    max-width: 15rem;
  }
}

@media (min-width: 770px) {
  .block.block-entry-header-demo .logo {
    border-top: 0;
    border-right: 2px solid var(--color-border-demo-header);
    order: 0;
    text-align: right;
  }

  .block.block-entry-header-demo .logo svg {
    padding: 2rem 4rem;
  }
}

.block.block-entry-header-demo .heading-hero {
  color: var(--color-white);
  margin: 0;
  padding: 2rem;
  position: relative;
  z-index: 1;
  text-align: center;
  line-height: 1.23;
}

@media (min-width: 770px) {
  .block.block-entry-header-demo .heading-hero {
    padding: 2rem 4rem;
    text-align: left;
  }
}

@media (max-width: 800px) {
  .block.block-entry-header-demo .heading-hero {
    font-size: 42px;
  }
}

@media (max-width: 500px) {
  .block.block-entry-header-demo .heading-hero {
    font-size: 32px;
  }
}

@media (max-width: 420px) {
  .block.block-entry-header-demo .heading-hero {
    font-size: 28px;
  }
}

.accent {
  font-size: var(--font-size-h3);
  font-style: normal;
  letter-spacing: .05em;
  text-transform: lowercase;
  font-weight: var(--font-weight-medium);
  margin: 0;
  margin-bottom: 1rem;
  color: var(--color-wild-blue-yonder);
  display: block;
  position: relative;
  z-index: 1;
}

@media (min-width: 960px) {
  .dropdown-toggle,
  .menu-item.current-menu-item > a,
  .menu-item.current-menu-parent > a,
  .site-header .site-branding .site-title a,
  .site-header .nav-primary .menu-items.nav-menu .menu-item > .dropdown-toggle,
  .site-header .nav-primary .menu-items .current-menu-parent > a,
  .site-header .nav-primary .menu-items .current-menu-item > a {
    color: var(--color-baby-blue);
  }

  .site-header .nav-primary .menu-items .sub-menu .current-menu-parent > a,
  .site-header .nav-primary .menu-items .sub-menu .current-menu-item > a,
  .site-header .nav-primary .menu-items .sub-menu .dropdown-toggle {
    color: var(--color-current);
  }

  .site-header .nav-primary .menu-items.nav-menu .sub-menu .menu-item > .dropdown-toggle {
    color: var(--color-valhalla);
  }
}

.block.block-entry-header-demo + .block .container.gutenberg-content {
  max-width: 100%;
}

.block.block-entry-header-demo + .block .container.gutenberg-content > p:first-of-type {
  margin-top: 0;
  padding-top: 0;
}

.block.block-blog article,
.block.block-blog nav {
  max-width: 800px;
  margin-left: auto;
  margin-right: auto;
}

.block-blog article {
  margin-bottom: var(--padding-block);
}

.block-blog article:last-child {
  margin-bottom: 0;
}

.block-blog ul.tags {
  padding-left: 0;
}

@media (min-width: 960px) {
  .block {
    min-height: 78px;
  }
}

.site-footer {
  background-color: var(--color-valhalla);
}

.components {
  display: flex;
  flex-wrap: wrap;
  margin-top: 6rem;
  margin-bottom: -4rem;
  align-items: flex-start;
}

.heading-demo {
  margin-top: 6rem;
  margin-bottom: 2.7rem;
  padding-bottom: 0;
}

.link-demo {
  color: var(--color-link-text);
  display: inline !important;
  text-decoration: underline;
  text-decoration-color: var(--color-link-text);
  text-underline-offset: 6px;
  transition: all .18s ease-in-out;
}

.link-demo::after {
  background-image: url("https://airwptheme.com/demo/content/themes/air-light/svg/external-link-styled-links.svg");
}

.link-demo:focus,
.link-demo:hover {
  color: var(--color-link-text-hover);
  text-decoration-color: var(--color-link-text-hover);
}

.link-demo:hover::after {
  background-image: url("https://airwptheme.com/demo/content/themes/air-light/svg/external-link-black.svg");
}

@media (prefers-reduced-motion: no-preference) {
  .link-demo:focus {
    outline-offset: 5px;
    transition: outline-offset .25s ease;
  }
}

.link-demo:focus::after {
  background-image: url("https://airwptheme.com/demo/content/themes/air-light/svg/external-link-black.svg");
}

body .component {
  border: 1px dashed var(--color-heliotrope);
  padding: 19px;
  margin-right: 4rem;
  margin-bottom: 4rem;
}

body .component .component-label {
  color: var(--color-heliotrope);
  font-size: 12px;
  position: absolute;
  margin-top: -42px;
  margin-left: -20px;
}

body .component .component-label::before {
  background-image: url("https://airwptheme.com/demo/figma-component.svg");
  background-repeat: no-repeat;
  content: "";
  display: inline-block;
  width: 11px;
  height: 11px;
  margin-right: 5px;
}

body .component p {
  display: flex;
  align-items: center;
  margin: 0 0 2rem;
}

body .component p:last-child {
  margin-bottom: 0;
}

/* Fix article-content styles for demo pages without hero block */
.block.block-blog .container,
.block.block-single .article-content {
  padding-top: calc( 5rem + var(--padding-block) );
}

/* Add article-content styles for demo pages
   as they do not have Gutenberg blocks, only classic editor */
body.page:not(.home) .site-main {
  max-width: 100%;
  padding-bottom: var(--padding-block);
  padding-left: 0;
  padding-right: 0;
  padding-top: calc( 5rem + var(--padding-block) );
}

/* Faux "Gutenberg-magic" */
body.page:not(.home) .site-main > * {
  line-height: var(--line-height-paragraphs-blog);
  margin-left: auto;
  margin-right: auto;
  max-width: 800px;
  padding-left: 0;
  padding-right: 0;
  width: 100%;
}

@media (max-width: 840px) {
  body.page:not(.home) .site-main > * {
    padding-left: var(--padding-container-horizontal);
    padding-right: var(--padding-container-horizontal);
  }

  body.page:not(.home) .site-main > .alignfull {
    padding-left: var(--padding-container-horizontal);
    padding-right: var(--padding-container-horizontal);
    width: calc(100% - calc(var(--padding-container-horizontal) * 2));
  }
}

/* core-list.css */
body.page:not(.home) .site-main > ol:not([class]),
body.page:not(.home) .site-main > ul:not([class]) {
  list-style: none;
  padding-left: 0;
  width: calc((100% - calc(var(--padding-container-horizontal) * 2)));
}

body.page:not(.home) .site-main > ol:not([class]) li,
body.page:not(.home) .site-main > ul:not([class]) li {
  display: table-row;
  padding: 0;
}

body.page:not(.home) .site-main > ul:not([class]) li::before {
  display: table-cell;
  content: '\2022';
  padding-right: .8rem;
}

body.page:not(.home) .site-main > ol:not([class]) {
  counter-reset: ol;
}

body.page:not(.home) .site-main > ol:not([class]) li {
  counter-increment: ol;
}

body.page:not(.home) .site-main > ol:not([class]) li::before {
  content: counter(ol) '.';
  padding-right: .3rem;
}

body.page:not(.home) .site-main > ol:not([class]) li::before,
body.page:not(.home) .site-main > ul:not([class]) li::before,
body.page:not(.home) .site-main > ol:not([class]) li::marker,
body.page:not(.home) .site-main > ul:not([class]) li::marker {
  color: var(--color-link-text);
}

</style>
<?php }
