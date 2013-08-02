<?php  $title = "GitHub Deployment |"; include '../header.php'; ?>

<section id="intro"><div class="container"><h2>Articles</h2></div></section>

<div class="container">
<div class="page">
  <div class="hero"><span><img src="/articles/assets/github-deployment/hero.png"/></span></div>

<article>
  <h2>GitHub Deployment</h2>
  <p>I want to share with you how I deploy some websites with GitHub Service Hooks. I original found out about this method from <a href="https://twitter.com/jeffrey_way">Jeffrey Way</a> with his article <a href="http://net.tutsplus.com/tutorials/other/the-perfect-workflow-with-git-github-and-ssh/">The Perfect Workflow, with Git, GitHub, and SSH</a>.</p>
  <p>The other day I needed to deploy to <strong>domain.com</strong> and <strong>dev.domain.com</strong> from the same repo. I must of Googled and tried a bunch of results for about 6 hours and came up empty handed and frustrated. I ended up calling <a href="https://twitter.com/johndbritton">John Britton</a>, a close friend of mine that works for GitHub.</p>
  <p>I was surprised when I found out how simple it was. I had the answer the whole time, it is exactly what Jeffrey taught us. All you have to do is fire the following when your Service Hook (WebHook URL) is called.</p>
<pre class="prettyprint linenums">
&lt;?php `git pull`;
</pre>
  <p>Try to think about your server as a co-worker. Let say you are working on <strong>master</strong> and your co-worker (the server) is working on the <strong>dev</strong> branch. If you are making changes and push to <strong>master</strong> and your co-worker pulls while on <strong>dev</strong>, of course they won't get your <strong>master</strong> changes. If you are working on and push to <strong>master</strong> and your co-worker is working on <strong>master</strong> and pulls, they will receive those changes. So naturally the when <strong>git pull</strong> get called it will only pull from what ever branch it is on. </p>
  <h3>Video</h3>
  <p>I made a little video to better explain my work flow and how this all works.</p>
  <iframe width="420" height="315" src="//www.youtube.com/embed/I5CtxEFrL4U" frameborder="0" allowfullscreen></iframe>
  <p>If you have any questions please feel free to ask.</p>
  <p class="byline">July 28th, 2013 &there4; Kennedy</p>
</article>


</div><!--/page-->
</div><!--/container-->

<?php include("../footer.php"); ?>