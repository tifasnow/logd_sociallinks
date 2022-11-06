<?php
/* Social Links on Bio Page module by Tifa Zabat
An optional module for PHP versions of Legend of the Green Dragon
Allows users to link to their Social Accounts from their Bio Pages with addition of a new field in the user profile.
To get the icons for the various social media profiles, I reccomend using a site such as Simple Icons https://simpleicons.org/ or Font Awesome https://fontawesome.com/
    CC-BY-SA 4.0 github:tifasnow https://github.com/tifasnow/logd_sociallinks/
    */

function sociallinks_getmoduleinfo(){
    $info = array (
        "name" => "Social Links on Bio Page",
        "version" => "2022.11.04",
        "author" => "<a href='https://github.com/tifasnow/' target=_new>Tifa Zabat</a>",
        "category" => "User",
        "description" => "Allows users to link to their Social Accounts from their Bio Pages with addition of a new field in the user profile.",
        "download" => "https://github.com/tifasnow/logd_sociallinks",
        "prefs" => array(
            "Social Links,title",
            "user_ao3" => "AO3 Username|",
            "userbattlenet" => "Battle.net Username|",
            "user_blogger" => "Blogger Username|",
            "user_deviantart" => "DeviantArt Username|",
            "user_discord" => "Discord Username|",
            "user_dribbble" => "Dribbble Username|",
            "user_facebook" => "Facebook Username|",
            "user_flickr" => "Flickr Username|",
            "user_flist" => "F-List Username|",
            "user_furaffinity" => "FurAffinity Username|",
            "user_github" => "GitHub Username|",
            "user_instagram" => "Instagram Username|",
            "user_mastodon" => "Mastodon Username|",
            "user_patreon" => "Patreon Username|",
            "user_pinterest" => "Pinterest Username|",
            "user_reddit" => "Reddit Username|",
            "user_skype" => "Skype Username|",
            "user_snapchat" => "Snapchat Username|",
            "user_steam" => "Steam Username|",
            "user_tiktok" => "TikTok Username|",
            "user_tumblr" => "Tumblr Username|",
            "user_twitter" => "Twitter Username|",
            "user_vimeo" => "Vimeo Username|",
            "user_youtube" => "YouTube Username|",
            "user_website" => "Website URL|",
        ),
        "settings" => array(
            "Social Links Settings,title",
            "show_ao3" => "Show AO3 icon?,bool|1",
            "show_battlenet" => "Show Battle.net icon?,bool|1",
            "show_blogger" => "Show Blogger icon?,bool|1",
            "show_deviantart" => "Show DeviantArt icon?,bool|1",
            "show_discord" => "Show Discord icon?,bool|1",
            "show_dribbble" => "Show Dribbble icon?,bool|1",
            "show_facebook" => "Show Facebook icon?,bool|1",
            "show_flickr" => "Show Flickr icon?,bool|1",
            "show_flist" => "Show F-List icon?,bool|1",
            "show_furaffinity" => "Show FurAffinity icon?,bool|1",
            "show_github" => "Show GitHub icon?,bool|1",
            "show_instagram" => "Show Instagram icon?,bool|1",
            "show_mastodon" => "Show Mastodon icon?,bool|1",
            "show_patreon" => "Show Patreon icon?,bool|1",
            "show_pinterest" => "Show Pinterest icon?,bool|1",
            "show_reddit" => "Show Reddit icon?,bool|1",
            "show_skype" => "Show Skype icon?,bool|1",
            "show_snapchat" => "Show Snapchat icon?,bool|1",
            "show_steam" => "Show Steam icon?,bool|1",
            "show_tiktok" => "Show TikTok icon?,bool|1",
            "show_tumblr" => "Show Tumblr icon?,bool|1",
            "show_twitter" => "Show Twitter icon?,bool|1",
            "show_vimeo" => "Show Vimeo icon?,bool|1",
            "show_youtube" => "Show YouTube icon?,bool|1",
            "show_website" => "Show Website icon?,bool|1",
        ),
    );
    return $info;
}

function sociallinks_install(){
    debug("Installing Social Links on Bio Page module");
    module_addhook("bioinfo");
    module_addhook("footer-prefs");
    return true;
}

function sociallinks_uninstall(){
    debug("Uninstalling Social Links on Bio Page module");
    return true;
}

function sociallinks_dohook($hookname, $args){
    global $session;
    switch ($hookname) {
        case "bioinfo":
            rawoutput("<table border='0' cellpadding='2' cellspacing='0' align='center'><tr><td valign='top'>");

            $user_ao3 = get_module_pref("user_ao3", "sociallinks", $args['acctid']);
            $user_ao3 = stripslashes(preg_replace("'[\"\'\\><@?*&#; ]'","",$user_ao3));
            $user_battlenet = get_module_pref("userbattlenet", "sociallinks", $args['acctid']);
            $user_battlenet = stripslashes(preg_replace("'[\"\'\\><@?*&#; ]'","",$user_battlenet));
            $user_blogger = get_module_pref("user_blogger", "sociallinks", $args['acctid']);
            $user_blogger = stripslashes(preg_replace("'[\"\'\\><@?*&#; ]'","",$user_blogger));
            $user_deviantart = get_module_pref("user_deviantart", "sociallinks", $args['acctid']);
            $user_deviantart = stripslashes(preg_replace("'[\"\'\\><@?*&#; ]'","",$user_deviantart));
            $user_discord = get_module_pref("user_discord", "sociallinks", $args['acctid']);
            $user_discord = stripslashes(preg_replace("'[\"\'\\><@?*&#; ]'","",$user_discord));
            $user_dribbble = get_module_pref("user_dribbble", "sociallinks", $args['acctid']);
            $user_dribbble = stripslashes(preg_replace("'[\"\'\\><@?*&#; ]'","",$user_dribbble));
            $user_facebook = get_module_pref("user_facebook", "sociallinks", $args['acctid']);
            $user_facebook = stripslashes(preg_replace("'[\"\'\\><@?*&#; ]'","",$user_facebook));
            $user_flickr = get_module_pref("user_flickr", "sociallinks", $args['acctid']);
            $user_flickr = stripslashes(preg_replace("'[\"\'\\><@?*&#; ]'","",$user_flickr));
            $user_flist = get_module_pref("user_flist", "sociallinks", $args['acctid']);
            $user_flist = stripslashes(preg_replace("'[\"\'\\><@?*&#; ]'","",$user_flist));
            $user_furaffinity = get_module_pref("user_furaffinity", "sociallinks", $args['acctid']);
            $user_furaffinity = stripslashes(preg_replace("'[\"\'\\><@?*&#; ]'","",$user_furaffinity));
            $user_github = get_module_pref("user_github", "sociallinks", $args['acctid']);
            $user_github = stripslashes(preg_replace("'[\"\'\\><@?*&#; ]'","",$user_github));
            $user_mastodon = get_module_pref("user_mastodon", "sociallinks", $args['acctid']);
            $user_mastodon = stripslashes(preg_replace("'[\"\'\\><@?*&#; ]'","",$user_mastodon));
            $user_instagram = get_module_pref("user_instagram", "sociallinks", $args['acctid']);
            $user_instagram = stripslashes(preg_replace("'[\"\'\\><@?*&#; ]'","",$user_instagram));
            $user_patreon = get_module_pref("user_patreon", "sociallinks", $args['acctid']);
            $user_patreon = stripslashes(preg_replace("'[\"\'\\><@?*&#; ]'","",$user_patreon));
            $user_pinterest = get_module_pref("user_pinterest", "sociallinks", $args['acctid']);
            $user_pinterest = stripslashes(preg_replace("'[\"\'\\><@?*&#; ]'","",$user_pinterest));
            $user_reddit = get_module_pref("user_reddit", "sociallinks", $args['acctid']);
            $user_reddit = stripslashes(preg_replace("'[\"\'\\><@?*&#; ]'","",$user_reddit));
            $user_skype = get_module_pref("user_skype", "sociallinks", $args['acctid']);
            $user_skype = stripslashes(preg_replace("'[\"\'\\><@?*&#; ]'","",$user_skype));
            $user_snapchat = get_module_pref("user_snapchat", "sociallinks", $args['acctid']);
            $user_snapchat = stripslashes(preg_replace("'[\"\'\\><@?*&#; ]'","",$user_snapchat));
            $user_steam = get_module_pref("user_steam", "sociallinks", $args['acctid']);
            $user_steam = stripslashes(preg_replace("'[\"\'\\><@?*&#; ]'","",$user_steam));
            $user_tiktok = get_module_pref("user_tiktok", "sociallinks", $args['acctid']);
            $user_tiktok = stripslashes(preg_replace("'[\"\'\\><@?*&#; ]'","",$user_tiktok));
            $user_tumblr = get_module_pref("user_tumblr", "sociallinks", $args['acctid']);
            $user_tumblr = stripslashes(preg_replace("'[\"\'\\><@?*&#; ]'","",$user_tumblr));
            $user_twitter = get_module_pref("user_twitter", "sociallinks", $args['acctid']);
            $user_twitter = stripslashes(preg_replace("'[\"\'\\><@?*&#; ]'","",$user_twitter));
            $user_vimeo = get_module_pref("user_vimeo", "sociallinks", $args['acctid']);
            $user_vimeo = stripslashes(preg_replace("'[\"\'\\><@?*&#; ]'","",$user_vimeo));
            $user_youtube = get_module_pref("user_youtube", "sociallinks", $args['acctid']);
            $user_youtube = stripslashes(preg_replace("'[\"\'\\><@?*&#; ]'","",$user_youtube));
            $user_website = get_module_pref("user_website", "sociallinks", $args['acctid']);
            $user_website = stripslashes(preg_replace("'[\"\'\\><@?*&#; ]'","",$user_website));

            if ($user_ao3 >""
                || $user_battlenet>"" || $user_blogger>"" || $user_deviantart>""
                || $user_discord>"" || $user_dribbble>"" || $user_facebook>""
                || $user_flickr>"" || $user_flist>"" || $user_furaffinity>""
                || $user_github>"" || $user_mastodon>"" || $user_patreon>""
                || $user_instagram>"" || $user_tiktok>""
                || $user_pinterest>"" || $user_reddit>"" || $user_skype>""
                || $user_snapchat>"" || $user_steam>"" || $user_tumblr>""
                || $user_twitter>"" || $user_vimeo>"" || $user_youtube>""
                || $user_website>""){
                output("`n`n`c`b`@Social Links`0`b`c`n");
            }
            if (get_module_setting("show_ao3")==1){
                if ($user_ao3>""){
                    rawoutput("<a href='https://archiveofourown.org/users/$user_ao3' target='_blank'><img src='modules/sociallinks/images/ao3.svg' alt='Archive of Our Own' title='Archive of Our Own' style='width: 32px; height: 32px;'></a>");
                }
            }
            if (get_module_setting("show_battlenet")==1){
                if ($user_battlenet>""){
                    rawoutput("<a href='https://battle.net/$user_battlenet' target='_blank'><img src='modules/sociallinks/images/battlenet.svg' alt='Battle.net' title='Battle.net' style='width: 32px; height: 32px;'></a>");
                }
            }
            if (get_module_setting("show_blogger")==1){
                if ($user_blogger>""){
                    rawoutput("<a href='https://$user_blogger.blogspot.com' target='_blank'><img src='modules/sociallinks/images/blogger.svg' alt='Blogger' title='Blogger' style='width: 32px; height: 32px;'></a>");
                }
            }
            if (get_module_setting("show_deviantart")==1){
                if ($user_deviantart>""){
                    rawoutput("<a href='https://$user_deviantart.deviantart.com' target='_blank'><img src='modules/sociallinks/images/deviantart.svg' alt='DeviantArt' title='DeviantArt' style='width: 32px; height: 32px;'></a>");
                }
            }
            if (get_module_setting("show_discord")==1){
                if ($user_discord>""){
                    rawoutput("<a href='https://discord.gg/$user_discord' target='_blank'><img src='modules/sociallinks/images/discord.svg' alt='Discord' title='Discord' style='width: 32px; height: 32px;'></a>");
                }
            }
            if (get_module_setting("show_dribbble")==1){
                if ($user_dribbble>""){
                    rawoutput("<a href='https://dribbble.com/$user_dribbble' target='_blank'><img src='modules/sociallinks/images/dribbble.svg' alt='Dribbble' title='Dribbble' style='width: 32px; height: 32px;'></a>");
                }
            }
            if (get_module_setting("show_facebook")==1){
                if ($user_facebook>""){
                    rawoutput("<a href='https://facebook.com/$user_facebook' target='_blank'><img src='modules/sociallinks/images/facebook.svg' alt='Facebook' title='Facebook' style='width: 32px; height: 32px;'></a>");
                }
            }
            if (get_module_setting("show_flickr")==1){
                if ($user_flickr>""){
                    rawoutput("<a href='https://flickr.com/$user_flickr' target='_blank'><img src='modules/sociallinks/images/flickr.svg' alt='Flickr' title='Flickr' style='width: 32px; height: 32px;'></a>");
                }
            }
            if (get_module_setting("show_flist")==1){
                if ($user_flist>""){
                    rawoutput("<a href='https://www.f-list.net/c/$user_flist' target='_blank'><img src='modules/sociallinks/images/flist.svg' alt='F-List' title='F-List' style='width: 32px; height: 32px;'></a>");
                }
            }
            if (get_module_setting("show_furaffinity")==1){
                if ($user_furaffinity>""){
                    rawoutput("<a href='https://www.furaffinity.net/user/$user_furaffinity' target='_blank'><img src='modules/sociallinks/images/furaffinity.svg' alt='FurAffinity' title='FurAffinity' style='width: 32px; height: 32px;'></a>");
                }
            }
            if (get_module_setting("show_github")==1){
                if ($user_github>""){
                    rawoutput("<a href='https://www.github.com/$user_github' target='_blank'><img src='modules/sociallinks/images/github.svg' alt='GitHub' title='GitHub' style='width: 32px; height: 32px;'></a>");
                }
            }
            if (get_module_setting("show_mastodon")==1){
                if ($user_mastodon>""){
                    rawoutput("<a href='https://mastodon.social/@$user_mastodon' target='_blank'><img src='modules/sociallinks/images/mastodon.svg' alt='Mastodon' title='Mastodon' style='width: 32px; height: 32px;'></a>");
                }
            }
            if (get_module_setting("show_patreon")==1){
                if ($user_patreon>""){
                    rawoutput("<a href='https://www.patreon.com/$user_patreon' target='_blank'><img src='modules/sociallinks/images/patreon.svg' alt='Patreon' title='Patreon' style='width: 32px; height: 32px;'></a>");
                }
            }
            if (get_module_setting("show_pinterest")==1){
                if ($user_pinterest>""){
                    rawoutput("<a href='https://pinterest.com/$user_pinterest' target='_blank'><img src='modules/sociallinks/images/pinterest.svg' alt='Pinterest' title='Pinterest' style='width: 32px; height: 32px;'></a>");
                }
            }
            if (get_module_setting("show_reddit")==1){
                if ($user_reddit>""){
                    rawoutput("<a href='https://www.reddit.com/user/$user_reddit' target='_blank'><img src='modules/sociallinks/images/reddit.svg' alt='Reddit' title='Reddit' style='width: 32px; height: 32px;'></a>");
                }
            }
            if (get_module_setting("show_skype")==1){
                if ($user_skype>""){
                    rawoutput("<a href='skype:$user_skype?chat' target='_blank'><img src='modules/sociallinks/images/skype.svg' alt='Skype' title='Skype' style='width: 32px; height: 32px;'></a>");
                }
            }
            if (get_module_setting("show_snapchat")==1){
                if ($user_snapchat>""){
                    rawoutput("<a href='https://www.snapchat.com/add/$user_snapchat' target='_blank'><img src='modules/sociallinks/images/snapchat.svg' alt='Snapchat' title='Snapchat' style='width: 32px; height: 32px;'></a>");
                }
            }
            if (get_module_setting("show_steam")==1){
                if ($user_steam>""){
                    rawoutput("<a href='https://steamcommunity.com/id/$user_steam' target='_blank'><img src='modules/sociallinks/images/steam.svg' alt='Steam' title='Steam' style='width: 32px; height: 32px;'></a>");
                }
            }
            if (get_module_setting("show_tumblr")==1){
                if ($user_tumblr>""){
                    rawoutput("<a href='https://$user_tumblr.tumblr.com' target='_blank'><img src='modules/sociallinks/images/tumblr.svg' alt='Tumblr' title='Tumblr' style='width: 32px; height: 32px;'></a>");
                }
            }
            if (get_module_setting("show_twitter")==1){
                if ($user_twitter>""){
                    rawoutput("<a href='https://twitter.com/$user_twitter' target='_blank'><img src='modules/sociallinks/images/twitter.svg' alt='Twitter' title='Twitter' style='width: 32px; height: 32px;'></a>");
                }
            }
            if (get_module_setting("show_vimeo")==1){
                if ($user_vimeo>""){
                    rawoutput("<a href='https://vimeo.com/$user_vimeo' target='_blank'><img src='modules/sociallinks/images/vimeo.svg' alt='Vimeo' title='Vimeo' style='width: 32px; height: 32px;'></a>");
                }
            }
            if (get_module_setting("show_youtube")==1){
                if ($user_youtube>""){
                    rawoutput("<a href='https://www.youtube.com/user/$user_youtube' target='_blank'><img src='modules/sociallinks/images/youtube.svg' alt='YouTube' title='YouTube' style='width: 32px; height: 32px;'></a>");
                }
            }
            if (get_module_setting("show_website")==1){
                if ($user_website>""){
                    rawoutput("<a href='$user_website' target='_blank'><img src='modules/sociallinks/images/link.svg' alt='Website' title='Website' style='width: 32px; height: 32px;'></a>");
                }
            }
            rawoutput("</td></tr></table>");

            break;
        case "footer-prefs":
            $args['prefs']['prefs-sociallinks'] = array(
                "title" => translate_inline("Social Links"),
                "label" => translate_inline("Add your Social Links to your Bio Page"),
                "setting" => "prefs-sociallinks",
                "type" => "prefs-sociallinks",
            );
            break;
    }
    return $args;
}

function sociallinks_run(){
    global $session;
}

?>
