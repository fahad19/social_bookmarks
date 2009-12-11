<?php
/**
 * SocialBookmarksHook Helper
 *
 * Shows graphical bookmark links of popular social networks.
 *
 * @category Helper
 * @package  Croogo
 * @version  1.0
 * @author   Fahad Ibnay Heylaal <contact@fahad19.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.croogo.org
 */
class SocialBookmarksHookHelper extends AppHelper {
/**
 * Other helpers used by this helper
 *
 * @var array
 * @access public
 */
    var $helpers = array(
        'Html',
        'Layout',
    );
/**
 * Default Bookmarks
 *
 * @var array
 * @access public
 */
    var $defaults = array(
        'delicious',
        'digg',
        'facebook',
        'friendfeed',
        'google',
        'linkedin',
        'reddit',
        'stumbleupon',
        'technorati',
        'twitter',
        'windows',
        'yahoo',
    );
/**
 * Types
 *
 * Shows bookmark links for these content types.
 *
 * @var array
 * @access public
 */
    var $types = array(
        'blog',
    );
/**
 * Bookmarks
 *
 * @var array
 * @access public
 */
    var $bookmarks = array(
        'delicious' => array(
            'name' => 'del.icio.us',
            'link' => 'http://del.icio.us/post?url={url}&title={title}',
            'icon' => 'delicious_32.png',
        ),
        'digg' => array(
            'name' => 'Digg',
            'link' => 'http://digg.com/submit?phase=2&url={url}&title={title}',
            'icon' => 'digg_32.png',
        ),
        'facebook' => array(
            'name' => 'Facebook',
            'link' => 'http://www.facebook.com/sharer.php?u={url}&t={title}',
            'icon' => 'facebook_32.png',
        ),
        'friendfeed' => array(
            'name' => 'Friendfeed',
            'link' => 'http://friendfeed.com/share?url={url}&title={title}',
            'icon' => 'friendfeed_32.png',
        ),
        'google' => array(
            'name' => 'Google Bookmarks',
            'link' => 'http://www.google.com/bookmarks/mark?op=edit&bkmk={url}&title={title}',
            'icon'=> 'google_32.png',
        ),
        'linkedin' => array(
            'name' => 'LinkedIn',
            'link' => 'http://www.linkedin.com/shareArticle?mini=true&url={url}&title={title}',
            'icon' => 'linkedin_32.png',
        ),
        'reddit' => array(
            'name' => 'reddit',
            'link' => 'http://reddit.com/submit?url={url}&title={title}',
            'icon' => 'reddit_32.png',
        ),
        'stumbleupon' => array(
            'name' => 'StumbleUpon',
            'link' => 'http://www.stumbleupon.com/submit?url={url}&title={title}',
            'icon' => 'stumbleupon_32.png',
        ),
        'technorati' => array(
            'name' => 'Technorati',
            'link' => 'http://www.technorati.com/faves?add={url}',
            'icon' => 'technorati_32.png',
        ),
        'twitter' => array(
            'name' => 'Twitter',
            'link' => 'http://twitter.com/?status=Currently reading {url}',
            'icon' => 'twitter_32.png',
        ),
        'windows' => array(
            'name' => 'Windows Live',
            'link' => 'https://favorites.live.com/quickadd.aspx?url={url}&title={title}',
            'icon' => 'windows_32.png',
        ),
        'yahoo' => array(
            'name' => 'Yahoo! My Web',
            'link' => 'http://myweb2.search.yahoo.com/myresults/bookmarklet?u={url}&t={title}',
            'icon'=> 'yahoo_32.png',
        ),
    );

    function afterNodeMoreInfo() {
        $output = '';

        if ($this->params['controller'] == 'nodes' &&
            $this->params['action'] == 'view' &&
            in_array($this->Layout->node('type'), $this->types)) {
            $output .= $this->Layout->View->element('social_bookmarks', array(
                'plugin' => 'social_bookmarks',
                'bookmarks' => $this->bookmarks,
                'defaults' => $this->defaults,
            ));
        }

        return $output;
    }
}
?>