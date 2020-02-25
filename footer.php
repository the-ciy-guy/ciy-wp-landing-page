<footer>
    <div class="footer-widgets">
        <?php if (is_active_sidebar('footer1')) : ?>
            <?php dynamic_sidebar('footer1'); ?>
        <?php endif; ?>
        <?php if (is_active_sidebar('footer2')) : ?>
            <?php dynamic_sidebar('footer2'); ?>
        <?php endif; ?>
        <?php if (is_active_sidebar('footer3')) : ?>
            <?php dynamic_sidebar('footer3'); ?>
        <?php endif; ?>
        <?php if (is_active_sidebar('footer4')) : ?>
            <?php dynamic_sidebar('footer4'); ?>
        <?php endif; ?>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>