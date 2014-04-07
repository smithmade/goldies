
<!-- header -->
	<script type="text/javascript">
		if ( (screen.width == 768) && (screen.height == 1024) ) { 
		window.location = 'gallery-tablet.php';
		} 
	</script>
    <script type="text/javascript">
        if ( (screen.width < 768) && (screen.height < 1024) ) { 
        window.location = 'gallery-mobile.php';
        } 
    </script>


<!-- jQuery Windows -->
    <script src="jquery.windows.js"></script>


<!-- Gallery -->

        <section id="0" class="window">
        	<div>
        		01/15
        		<div class="arrow">
        			<a href="#1"><img src="images/arrow.svg" alt="Arrow"></a>
        		</div>
        	</div>

        </section>

        <section id="1" class="window">
        	<div>
        		02/15
        		<div class="arrow">
        			<a href="#2"><img src="images/arrow.svg" alt="Arrow"></a>
        		</div>
        	</div>
        </section>

        <section id="2" class="window">
        	<div>
        		03/15
        		<div class="arrow">
        			<a href="#3"><img src="images/arrow.svg" alt="Arrow"></a>
        		</div>
        	</div>
        </section>

        <section id="3" class="window">
        	<div>
        		04/15
        		<div class="arrow">
        			<a href="#4"><img src="images/arrow.svg" alt="Arrow"></a>
        		</div>
        	</div>
        </section>

        <section id="4" class="window">
        	<div>
        		05/15
        		<div class="arrow">
        			<a href="#5"><img src="images/arrow.svg" alt="Arrow"></a>
        		</div>
        	</div>
        </section>

        <section id="5" class="window">
        	<div>
        		06/15
        		<div class="arrow">
        			<a href="#6"><img src="images/arrow.svg" alt="Arrow"></a>
        		</div>
        	</div>
        </section>

        <section id="6" class="window">
        	<div>
        		07/15
        		<div class="arrow">
        			<a href="#7"><img src="images/arrow.svg" alt="Arrow"></a>
        		</div>
        	</div>
        </section>

        <section id="7" class="window">
        	<div>
        		08/15
        		<div class="arrow">
        			<a href="#8"><img src="images/arrow.svg" alt="Arrow"></a>
        		</div>
        	</div>
        </section>

        <section id="8" class="window">
        	<div>
        		09/15
        		<div class="arrow">
        			<a href="#9"><img src="images/arrow.svg" alt="Arrow"></a>
        		</div>
        	</div>
        </section>

        <section id="9" class="window">
        	<div>
        		10/15
        		<div class="arrow">
        			<a href="#10"><img src="images/arrow.svg" alt="Arrow"></a>
        		</div>
        	</div>
        </section>

        <section id="10" class="window">
        	<div>
        		11/15
        		<div class="arrow">
        			<a href="#11"><img src="images/arrow.svg" alt="Arrow"></a>
        		</div>
        	</div>
        </section>

        <section id="11" class="window">
        	<div>
        		12/15
        		<div class="arrow">
        			<a href="#12"><img src="images/arrow.svg" alt="Arrow"></a>
        		</div>
        	</div>
        </section>

        <section id="12" class="window">
        	<div>
        		13/15
        		<div class="arrow">
        			<a href="#13"><img src="images/arrow.svg" alt="Arrow"></a>
        		</div>
        	</div>
        </section>

        <section id="13" class="window">
        	<div>
        		14/15
        		<div class="arrow">
        			<a href="#14"><img src="images/arrow.svg" alt="Arrow"></a>
        		</div>
        	</div>
        </section>

        <section id="14" class="window">
        	<div class="last paging">
        		15/15
        		<div class="arrow upside-down">
        			<a href="#0"><img src="images/arrow.svg" alt="Arrow"></a>
        		</div>
        	</div>
        </section>


<!-- windows script -->
        <script type="text/javascript">

            $(document).ready(function(){

                var $windows = $('.window');

                $windows.windows({
                    snapping: false,
                    snapSpeed: 300,
                    snapInterval: 300,
                    onScroll: function(s){},
                    onSnapComplete: function($el){},
                    onWindowEnter: function($el){}
                });

            });
        </script>

        