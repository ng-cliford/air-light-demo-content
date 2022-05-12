<?php
/**
 * Custom block
 *
 * @Author: Timi Wahalahti
 * @Date:   2021-05-17 13:34:52
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2022-05-12 14:12:37
 *
 * @package air-light
 */
?>

<section class="block block-entry-header-demo has-dark-bg">
  <div class="inner">
    <div class="logo">
      <?php include get_theme_file_path( THEME_SETTINGS['logo'] ); ?>
    </div>
    <h1 class="heading-hero" id="content">
      <span class="accent">
        <?php echo esc_html_e( 'air-light ', 'air-light' ); ?><?php echo esc_html( AIR_LIGHT_VERSION ); ?>
      </span>
      <?php echo esc_html_e( 'a WordPress starter theme', 'air-light' ); ?>
    </h1>
  </div>
</section>

<section class="block has-light-bg">
  <article class="container article-content">

    <!-- wp:paragraph -->
    <p>You are viewing the demo of <a href="https://www.dude.fi">Digitoimisto Dude Oy's</a> starter theme called <b>Air-light</b> (or air in short). Please go to <a href="https://github.com/digitoimistodude">Dude's GitHub</a> to learn more or <a href="https://github.com/digitoimistodude/air">download the theme</a>.</p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"level":1} -->
    <h1 class="heading-hero">This is a heading (Hero)</h1>
    <h1>This is a heading (H1)</h1>
    <!-- /wp:heading -->

    <!-- wp:heading {"level":2} -->
    <h2>This is a heading (H2)</h2>
    <!-- /wp:heading -->

    <!-- wp:heading {"level":3} -->
    <h3>This is a heading (H3)</h3>
    <!-- /wp:heading -->

    <!-- wp:heading {"level":4} -->
    <h4>This is a heading (H4)</h4>
    <!-- /wp:heading -->

    <!-- wp:heading {"level":5} -->
    <h5>This is a heading (H5)</h5>
    <!-- /wp:heading -->

    <!-- wp:heading {"level":6} -->
    <h6>This is a heading (H6)</h6>
    <!-- /wp:heading -->

    <!-- wp:heading {"level":2} -->
    <h2 class="heading-demo">Button components</h2>
    <!-- /wp:heading -->

    <div class="components">
      <div class="component">
        <span class="component-label">_button-size-large.scss</span>
        <p><a class="button button-large" href="#">Primary button</a></p>
        <p><a class="button button-large focus" href="#">Primary button</a></p>
      </div>

      <div class="component">
        <span class="component-label">_button-size-large.scss</span>
        <p><a class="button button-ghost button-large" href="#">Primary button</a></p>
        <p><a class="button button-ghost button-large focus" href="#">Primary button</a></p>
      </div>

      <div class="component">
        <span class="component-label">_button-style-ghost.scss</span>
        <p><a class="button button-ghost" href="#">Primary button</a></p>
        <p><a class="button button-ghost focus" href="#">Primary button</a></p>
      </div>

      <div class="component">
        <span class="component-label">_button.scss</span>
        <p><a class="button" href="#">Primary button</a></p>
        <p><a class="button focus" href="#">Primary button</a></p>
      </div>

      <div class="component">
        <span class="component-label">_button-size-small.scss</span>
        <p><a class="button button-small" href="#">Tertiary button</a></p>
        <p><a class="button button-small focus" href="#">Tertiary button</a></p>
      </div>
    </div>

    <!-- wp:heading {"level":2} -->
    <h2 class="heading-demo">Link components</h2>
    <!-- /wp:heading -->

    <div class="components">
      <div class="component">
        <span class="component-label">_link.scss</span>
        <p class="has-align-left"><a href="#" class="link-demo">Link style</a></p>
      </div>
    </div>

    <!-- wp:heading {"level":2} -->
    <h2 class="heading-demo">Paragraph block</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>This is a <strong>regular</strong> paragraph block. Professionally productize highly efficient results with world-class core competencies. Objectively matrix leveraged architectures vis-a-vis error-free applications. Completely maximize customized portals via fully researched metrics. Enthusiastically generate premier action items through web-enabled e-markets. Efficiently parallel task holistic intellectual capital and client-centric markets.</p>
    <!-- /wp:paragraph -->

    <!-- wp:heading -->
    <h2 class="heading-demo">Lists in between of text</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>This is a <strong>regular</strong> paragraph block. Professionally productize highly efficient results with world-class core competencies. Objectively matrix leveraged architectures vis-a-vis error-free applications. Completely maximize customized portals via fully researched metrics. Enthusiastically generate premier action items through web-enabled e-markets. Efficiently parallel task holistic intellectual capital and client-centric markets.</p>
    <!-- /wp:paragraph -->

    <!-- wp:list -->
    <ul>
    <li>This is ul list item</li>
    <li>This is a long ul list item. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam iaculis fringilla purus, sed feugiat mauris tincidunt ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi mauris risus, auctor vel congue et, euismod non mauris.</li>
    <li>This is even longer list item with links in it. <a href="https://www.google.com">External link</a> lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam iaculis fringilla purus, sed feugiat mauris tincidunt ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi mauris risus, <a href="https://airwptheme.com/demo">internal link</a> vel congue et, euismod non mauris.</li>
    </ul>
    <!-- /wp:list -->

    <!-- wp:paragraph -->
    <p>This is a <strong>regular</strong> paragraph block. Professionally productize highly efficient results with world-class core competencies. Objectively matrix leveraged architectures vis-a-vis error-free applications. Completely maximize customized portals via fully researched metrics. Enthusiastically generate premier action items through web-enabled e-markets. Efficiently parallel task holistic intellectual capital and client-centric markets.</p>
    <!-- /wp:paragraph -->

    <!-- wp:list {"ordered":true} -->
    <ol>
    <li>This is ol list item</li>
    <li>This is ol list item</li>
    <li>This is ol list item</li>
    </ol>
    <!-- /wp:list -->

    <!-- wp:heading -->
    <h2 class="heading-demo">Traditional items</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>This is a <kbd>kbd</kbd> keyboard tag. Like <kbd>alt</kbd> + F4. This is <del>del-tag</del>.</p>
    <!-- /wp:paragraph -->

    <!-- wp:heading -->
    <h2 class="heading-demo">Tables</h2>
    <!-- /wp:heading -->

    <!-- wp:table -->
    <table class="wp-block-table">
      <thead style="display: block; max-width: 315px;">
        <tr>
          <th style="width: 140px;">Name</th>
          <th style="width: 140px;">Age</th>
        </tr>
      </thead>
    
    <tbody style="display: block; max-width: 315px;">
      <tr>
        <td style="width: 140px;">Antero</td>
        <td style=" width: 140px;">34</td>
      </tr>
      <tr>
        <td style="width: 140px;">Jorma</td>
        <td style="width: 140px;">23</td>
      </tr>
      <tr>
        <td style="width: 140px;">Mikko</td>
        <td style="width: 140px;">19</td>
      </tr>
      <tr>
        <td style="width: 140px;">Päivi</td>
        <td style="width: 140px;">25</td>
      </tr>
      <tr>
        <td style="width: 140px;">Leila</td>
        <td style="width: 140px;">27</td>
      </tr>
      <tr>
        <td style="width: 140px;">Tomi</td>
        <td style="width: 140px;">27</td>
      </tr>
      </tbody>
    </table>
    <!-- /wp:table -->

  </article>
</section>
