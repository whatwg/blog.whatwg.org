<aside id="sidebar">
 <h2>Pages</h2>
 <ul>
  <li><a href="https://whatwg.org/">Home</a></li>
  <li><a href="https://whatwg.org/faq">FAQ</a></li>
  <li><a href="https://whatwg.org/chat">Chat</a></li>
  <li><a href="https://whatwg.org/code-of-conduct">Code of Conduct</a></li>
  <li><a href="https://whatwg.org/privacy-policy">Privacy Policy</a></li>
  <?php wp_list_pages('title_li='); ?>
 </ul>

 <h2>Archives</h2>
 <ul>
  <?php wp_get_archives('type=monthly'); ?>
 </ul>

 <h2>Categories</h2>
 <ul>
  <?php wp_list_categories('show_count=1&title_li='); ?>
 </ul>
</aside>
