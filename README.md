# ilite

Wordpress theme for ilite.me


## Local setup

**update server path**

    <?php echo dirname(__FILE__); ?>

**update image URL**

    UPDATE wp_posts SET post_content = replace(post_content, 'http://img.ilite.me', 'http://192.168.1.100:201');
    UPDATE wp_posts SET guid = replace(guid, 'http://img.ilite.me', 'http://192.168.1.100:201');

