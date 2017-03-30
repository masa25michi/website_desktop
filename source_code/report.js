$(document).ready(main);

function main() {
  $.ajax({
    type: "GET",
    url: "getReportData.php",
    success: function(data) {
      readyReport(JSON.parse(data));
    },
    error: function (xhr, ajaxOptions, thrownError) {
        alert("Error, see console");
        console.log(xhr.responseText);
        console.log(thrownError);
      }
  });
}

function readyReport(datas) {
  reportDOM = $('.report');
  for (i = 0; i < datas.length; i++) {
    data = datas[i];
    id = data.Id;
    contents = data.Content;
    answers = data.Answers;
    div = $('<div class="graphs">');
    div.append($('<h3>' + (i+1) + '. ' + contents + '</h3>'));
    div.append($('<div id="' + id + '"></div>'));

    graphData = [{
      labels: [],
      values: [],
      type: 'pie'
    }];

    for (var prop in answers) {
      graphData[0].labels.push(prop);
      graphData[0].values.push(answers[prop]);
    }

    var layout = {
      height: 400,
      width: 500
    };

    reportDOM.append(div);
    Plotly.newPlot(id, graphData, layout);
  }
  reportDOM.append($('<br>'));
}
