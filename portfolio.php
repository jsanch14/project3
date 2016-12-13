<?php $parentTitle = "JASL"; $currentTitle = "Portfolio"; $separator = " | "; include "inc/top.inc";?>

		<?php include "inc/nav.inc";?>
		<script>
            function highlight_row() {
    var table = document.getElementById('dataTable');
    var cells = table.getElementsByTagName('td');

    for (var i = 0; i < cells.length; i++) {
        // Take each cell
        var cell = cells[i];
        // do something on onclick event for cell
        cell.onclick = function () {
            // Get the row id where the cell exists
            var rowId = this.parentNode.rowIndex;

            var rowsNotSelected = table.getElementsByTagName('tr');
            for (var row = 0; row < rowsNotSelected.length; row++) {
                rowsNotSelected[row].style.backgroundColor = "";
                rowsNotSelected[row].classList.remove('selected');
            }
            var rowSelected = table.getElementsByTagName('tr')[rowId];
            rowSelected.style.backgroundColor = "yellow";
            rowSelected.className += " selected";

            
        }
    }

} //end of function

window.onload = highlight_row;

        </script>

		<table id="dataTable">
			<tbody class="stripe_table" >
						<tr onclick="highlight()" ><td><a href="http://www.urcsc170.org/jsanchezdellano/lab01">Lab 1</a></td><td><img class="thum" src="images/lab1.png"></td><td><p>This assignment served as a demonstration on basic skills on WebDev prior to the course</p></td></tr>
						<tr onclick="highlight()" ><td><a href="http://www.urcsc170.org/jsanchezdellano/lab02">Lab 2</a></td><td><img class="thum" src="images/lab2.png"></td><td><p>This assignment displays the skill of minimizing the coding by using PHP includes to avoid the repetitive texts throughout webpages</p></td></tr>
						<tr onclick="highlight()" ><td><a href="http://www.urcsc170.org/jsanchezdellano/lab03">Lab 3</a></td><td><img class="thum" src="images/lab3.png"></td><td><p>This assignment shows the ability to incorporate a previously existing framework into a previously developed website</p></td></tr>
						<tr onclick="highlight()" class="ad"><td><a href="http://www.urcsc170.org/jsanchezdellano/lab06">Lab 6</a></td><td><img class="thum" src="images/lab7.png"></td><td><p>This assignment shows the ability of recreating a website by just using the stylesheets</p></td></tr>
						<tr onclick="highlight()" class="acd"><td><a href="http://www.urcsc170.org/jsanchezdellano/lab07">Lab 7</a></td><td><img class="thum" src="images/lab8.png"></td><td><p>This assignment proves the skill of using google fonts into a website</p></td></tr>
						<tr onclick="highlight()" class="ad"><td><a href="http://www.urcsc170.org/jsanchezdellano/lab09">Lab 9</a></td><td><img class="thum" src="images/lab9.png"></td><td><p></p>This assignment proves to use the design patterns most used in the industry</td></tr>
						<tr onclick="highlight()" class="acd"><td><a href="http://urcsc170.org/nheitsch/Project%201/index.php">Collaborative Project 1</a></td><td><img class="thum" src="images/p1.png"></td><td><p>This project worked to show the ability of working on a team environment and helped me work on frameworks in more depth since that was my role in these projects</p></td></tr>
						<tr onclick="highlight()" class="ad"><td><a href="http://urcsc170.org/nheitsch/team01_project02/">Collaborative Project 2</a></td><td><img class="thum" src="images/p2.png"></td><td><p>This project allows to adjust the skills of the team to meet customer needs, which is a needed tool in the industry</p></td></tr>
					</tbody>
					</table>

		<?php include "inc/footer.inc";?>

	</div><!--.container-->

	<?php include "inc/scripts.inc";?>
	
	</body>

</html>
