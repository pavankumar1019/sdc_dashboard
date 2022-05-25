<div class="container">
    	<h2 class="text-center mt-4 mb-4">Ajax Pagination using JavaScript with PHP and MySQL</h2>
    	
    	<div class="card">
    		<div class="card-header">
    			<div class="row">
    				<div class="col-md-6">Sample Data</div>
    				<div class="col-md-3 text-right"><b>Total Data - <span id="total_data"></span></b></div>
    				<div class="col-md-3">
    					<input type="text" name="search" class="form-control" id="search" placeholder="Search Here" onkeyup="load_data(this.value);" />
    				</div>
    			</div>
    		</div>
    		<div class="card-body">
    			<table class="table table-bordered">
    				<thead>
    					<tr>
    						<th width="5%">#</th>
    						<th width="35%">Post Title</th>
    						<th width="60%">Description</th>
    					</tr>
    				</thead>
    				<tbody id="post_data"></tbody>
    			</table>
    			<div id="pagination_link"></div>
    		</div>
    	</div>
    	
    </div>