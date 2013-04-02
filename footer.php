<?php namespace Habari; ?>
	<footer>
		<div class="container">
			<div class="row">
				<div class="offset-by-one four columns">
					<h6>Project</h6>
					<ul>
						<li><a href="<?php Site::out_url('site'); ?>/vision">Vision</a></li>
						<li><a href="<?php Site::out_url('site'); ?>/history">History</a></li>
						<li><a href="https://github.com/habari/system/contributors">Committers</a></li>
						<li><a href="https://github.com/organizations/habari">Source Code</a></li>
						<li><a href="<?php Site::out_url('site'); ?>/license">License</a></li>
					</ul>
				</div>
				<div class="four columns">
					<h6>Community</h6>
					<ul>
						<li><a href="<?php Site::out_url('site'); ?>/blog">Community News</a></li>
						<li><a href="http://groups.google.com/group/habari-users">Users Mailing List</a></li>
						<li><a href="http://groups.google.com/group/habari-dev">Developers Mailing List</a></li>
						<li><a href="http://stackoverflow.com/questions/tagged/habari">Community Q &amp; A</a></li>
						<li><a href="http://twitter.com/habari">Twitter</a></li>
					</ul>
				</div>
				<div class="four columns">
					<h6>Documentation</h6>
					<ul>
						<li><a href="http://wiki.habariproject.org">Wiki</a></li>
						<li><a href="http://doc.habariproject.org">Habari API</a></li>
						<li><a href="http://stackoverflow.com/questions/tagged/habari">Community Q &amp; A</a></li>
						<li><a href="http://wiki.habariproject.org/en/FAQ">FAQ</a></li>
					</ul>
				</div>
				<div id="foot_logo" class="two columns">
					<img src="<?php Site::out_url('theme'); ?>/images/footer_logo.png">
				</div>
			</div>
		</div>
	</footer>
</div>
<script src="<?php Site::out_url('theme'); ?>/js/application.js"></script>
</body>
</html>