<?php
/**
 * Comments Template
 *
 * This template file is responsible for displaying comments and comment form.
 *
 * @package simplexp
 */

// Avoid direct access to this script
if('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) {
    die(esc_html__('Do not load this page directly!', 'simplexp'));
}

// Check if password is required
if(post_password_required()): ?>
    <p class="nocomments"><?php esc_html_e('This post is password protected. Enter the password to view comments.', 'simplexp'); ?></p>
    <?php
    return;
endif;

// Display Comments
if(have_comments()): ?>
    <h3 id="comments"><?php comments_number(esc_html__('No Responses', 'simplexp'), esc_html__('1 Response', 'simplexp'), esc_html__('% Responses', 'simplexp')); ?></h3>

    <div class="navigation">
        <div class="alignleft"><?php previous_comments_link(); ?></div>
        <div class="alignright"><?php next_comments_link(); ?></div>
    </div>

    <ol class="commentlist">
        <?php
        wp_list_comments(array(
            'avatar_size' => 64,
        ));
        ?>
    </ol>

    <div class="navigation">
        <div class="alignleft"><?php previous_comments_link(); ?></div>
        <div class="alignright"><?php next_comments_link(); ?></div>
    </div>

    <?php
    if(!comments_open()) : // Commenti chiusi ?>
        <p class="nocomments"><?php esc_html_e('Comments are closed.', 'simplexp'); ?></p>
    <?php endif;

else: // No comments
  if(comments_open()): // Commenti aperti, ma nessuno presente ?>
      <!-- Puoi inserire qui un messaggio del tipo "Be the first to write a comment." -->
  <?php else: // Commenti chiusi ?>
      <p class="nocomments"><?php esc_html_e('Comments are closed.', 'simplexp'); ?></p>
  <?php endif;
endif;

// Comment form
comment_form(array(
    'fields' => array(
        'author' => '<p><input type="text" id="author" name="author" size="30" maxlength="245" placeholder="' . esc_attr__('Name *', 'simplexp') . '" autocomplete="name" required="required"></p>',
        'email'  => '<p><input type="email" id="email" name="email" size="30" maxlength="100" placeholder="' . esc_attr__('Email *', 'simplexp') . '" autocomplete="email" required="required"></p>',
        'url'    => '<p><input type="url" id="url" name="url" size="30" maxlength="200" placeholder="' . esc_attr__('Website', 'simplexp') . '" autocomplete="url"></p>',
    ),
    'comment_field' => '<p><textarea name="comment" id="comment" cols="58" rows="10" placeholder="' . esc_attr__('Comment *', 'simplexp') . '" aria-required="true" required="required"></textarea></p>',
    'label_submit' => esc_html__('Submit Comment', 'simplexp'),
    'comment_notes_after' => '',
    //'class_submit' => 'button--second'
));

// RSS Link
echo '<div class="comments_rss">';
post_comments_feed_link(esc_html__('Comments RSS Feed', 'simplexp'));
echo '</div>';
?>
