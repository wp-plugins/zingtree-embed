=== Zingtree Embed ===
Contributors: dartiss
Donate link: http://artiss.co.uk/donate
Tags: zingtree, tree, embed
Requires at least: 2.8
Tested up to: 4.2.2
Stable tag: 1.0

Embed interactive decision trees from Zingtree into your WordPress site.

== Description ==

Zingtree is a toolkit that lets you embed interactive decision trees into any web page.  It's useful for helping people find answers in a simple Q&A format. Your end-users are prompted with questions and then click answer buttons to navigate through an interactive decision tree you build. You can start building trees now at [Zingtree.com](http://zingtree.com "Zingtree.com") for free.

To embed a Zingtree into your web page, enter a shortcode like this:

`[zingtree id="148196706"]`

or to display in "panels" style and add persistent buttons to the bottom of each page:

`[zingtree id="148196706" style="panels" persist_names="Restart|Submit Ticket" persist_node_ids="1|5"]`

Finally, Zingtree has a feature similar to mail merge. Just add placeholders like #NAME#, #PRODUCT# (or anything you like) to any part of your node's text, and have those placeholders replaced from values passed into the URL. For example, to replace #NAME# and #PRODUCT# with "Joe Smith" and "Zingtree", you'd add the following extra parameters to the above example:

`[zingtree id="148196706" style="panels" persist_names="Restart|Submit Ticket" persist_node_ids="1|5" variables="NAME|PRODUCT" values="Joe+Smith|Zingtree"]`

= The parameters: =
* **id** - The Tree ID which you want to embed.
* **style** - The style used to display the tree. Can be "buttons" or "panels". Buttons is the default if not specified (optional).
* **persist_names** - Names of persistent buttons on each page (optional).
* **persist_node_ids** - The node numbers of persistent buttons on each page (optional).
* **variables** - The placeholders for any part of your node's text (optional).
* **values** - Replace the placeholders with these values (optional).
* **width** - The width of the output IFRAME, this will be set to "100%" if not specified (optional).
* **height** = The height of the output IFRAME, this will not be set if omitted (optional).
* **debug** - By default, debug information is output to the page as hidden comments. These are useful when reporting any issues but can be switched off by setting this to "false".

For further support on how this works, please ensure you consult the Zingtree website. After creating a Tree, use the Share option and details on all of the above will be shown. If you have a technical problem with this plugin then please use the Support forum here on WordPress.org.

**NB: This is not the official Zingtree plugin and is not authored or supported by Zingtree - please see the 'FAQ' section for more details.**

== Licence ==

This WordPress plugin is licensed under the [GPLv2 (or later)](http://wordpress.org/about/gpl/ "GNU General Public License"). This plugin uses the iFrameResize script which is licensed under the [MIT license](http://mit-license.org/ "MIT license"), which is compatible with GPL.

== Installation ==

Zingtree Embed can be found and installed via the Plugin menu within WordPress administration. Alternatively, it can be downloaded and installed manually...

1. Upload the entire `zingtree-embed` folder to your wp-content/plugins/ directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. That's it, you're done - you just need to add the shortcode!

== Frequently Asked Questions ==

= Isn't this just like the official Zingtree plugin? =

On the surface, yes. The official plugin hasn't been very supported and requests in their forum have gone un-answered. This plugin WILL be supported by the author and already addresses some issues that have already been raised, such as being able to change the width and height of the output. Also, the merge variable functionality has not been added, whereas it is here.

= I've been using the official plugin. Is this compatible? =

It is! I intentionally kept the parameter names the same to ensure cross-compatibility.

= Aren't you supposed to specify the tree name? =

Ah, you've been looking at the Zingtree website. Yes, they ask for both tree ID and name, however it appears to make no difference whether the name is specified or not. Indeed, the official Zingtree plugin doesn't ask for it but, instead, hard codes a generic name into the resulting embed code (something like "Test Tree"). Instead, I just simply don't use it and it all appears to work exactly the same.

= What's coming next? =

The official embedding code, from the Zingtree website, includes a call to a Zingtree hosted script to format the IFRAME nicely. However, calling external scripts can be a pretty unsafe thing to do so, although I do it in this release (and, let's not forget, so does the official plugin) I intend to add a setting in a future release to, instead, host it locally. This will also mean that I can upgrade the script to the latest version as well (something the Zingtree hosted version isn't).

Other than that, I've no plans, so please tell me (via the forums) what you'd like!

== Changelog ==

= 1.0 =
* Initial release

== Upgrade Notice ==

= 1.0 =
* Initial release