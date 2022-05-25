function load_data(query = '', page_number = 1)
{
	var form_data = new FormData();

	form_data.append('query', query);

	form_data.append('page', page_number);

	var ajax_request = new XMLHttpRequest();

	ajax_request.open('POST', './Modules/php_inc/newadmissionData.php');

	ajax_request.send(form_data);

	ajax_request.onreadystatechange = function()
	{
		if(ajax_request.readyState == 4 && ajax_request.status == 200)
		{
			var response = JSON.parse(ajax_request.responseText);

			var html = '';

			var serial_no = 1;

			if(response.data.length > 0)
			{
				for(var count = 0; count < response.data.length; count++)
				{
					html += '<tr>';
					html += '<td>'+response.data[count].post_id+'</td>';
					html += '<td>'+response.data[count].post_title+'</td>';
					html += '<td>'+response.data[count].post_description+'</td>';
					html += '</tr>';
					serial_no++;
				}
			}
			else
			{
				html += '<tr><td colspan="3" class="text-center">No Data Found</td></tr>';
			}

			document.getElementById('post_data').innerHTML = html;

			document.getElementById('total_data').innerHTML = response.total_data;

			document.getElementById('pagination_link').innerHTML = response.pagination;

		}

	}
}