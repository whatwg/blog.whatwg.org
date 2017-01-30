<aside id="sidebar">
 <h2>Pages</h2>
 <ul>
  <li><a href="https://whatwg.org/">Home</a></li>
  <li><a href="https://wiki.whatwg.org/wiki/FAQ">FAQ</a></li>
  <li><a href="https://wiki.whatwg.org/wiki/IRC">IRC</a></li>
  <li><a href="https://wiki.whatwg.org/wiki/Code_of_Conduct">Code of Conduct</a></li>
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
