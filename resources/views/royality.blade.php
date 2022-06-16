@extends('layouts.appMusic')
@section('content')
    <div id="content-page" class="content-page mt-5">
        <div class="container-fluid mt-3">
            <div class="row row-eq-height">
                <p class="content-text">Here you'll find detailed reports on the royalties your music has earned. Some
                    stores report sales to us with up to 3 month delay, so you might not see recent earnings reflected
                    in
                    these reports straight away.</p>
            </div>
            <div class="block-1">
                <div class="report">
                    <div class="diagram">
                        <canvas id="lineChart" width="600" height="320"
                                style="display: block; width: 600px; height: 320px;"></canvas>
                    </div>
                    <div class="monthly">
                        <h3 class="block-1--title">Monthly Report</h3>
                        <div class="block-1--description">Last reporting months</div>
                        <div class="block-1--description">total earnings</div>


                        <div class="block-1---price">$1.38</div>
                        <div class="monthly-sale">-20.01%</div>
                        <p class="monthly-month">vs Previous Month</p>
                        <div class="orange-info--block">
                            <div class="orange-info--img">
                                <img src="{{asset('assets/image/page-img/icon-orange-info.svg')}}" alt="">
                            </div>
                            <div class="orange-info--text">
                                Lorem Ipsum is simply mmy text of the printing and typesetting dummy text of the
                                printing
                                and.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="balance">
                    <div class="balance-top">
                        <h3 class="block-1--title">Available Balance</h3>
                        <div class="block-1--description mt-3">Your available balance to withdraw is:</div>
                        <div class="block-1---price mt-3">$0.00</div>
                        <button class="block-1---btn" data-modal="#modal-regards">Withdraw</button>
                    </div>
                    <div class="balance-bottom">
                        <div class="balance-bottom--left">
                            <div class="balance-bottom--title">
                                Pending Payouts
                            </div>
                            <div class="balance-bottom--price">
                                $0.00
                            </div>
                        </div>
                        <div class="balance-bottom--right">
                            <div class="balance-bottom--title">
                                Total balance
                            </div>
                            <div class="balance-bottom--price">
                                $0.00
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-2">
                <div class="block-2--countries block-bg">
                    <div class="page-title">
                        Best Performing Countries
                    </div>
                    <div class="block-2--map">
                        <div id="svgMap"></div>
                        <canvas id="mapChart" class="bar-chart chartjs-render-monitor" width="600" height="320"
                                style="display: block; width: 600px; height: 320px;"></canvas>
                    </div>
                </div>
                <div class="block-2--stores block-bg">
                    <div class="page-title">
                        Best Performing Stores
                    </div>
                    <div class="block-2--diagram">
                        <canvas id="myChart" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
            <div class="block-3 project-tab" id="tabs">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                           aria-controls="nav-home" aria-selected="true">Overview</a>
                        <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                           aria-controls="nav-profile" aria-selected="false">Tracks</a>
                        <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
                           aria-controls="nav-contact" aria-selected="false">Stores</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <table class="table" cellspacing="0">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Total Sales</th>
                                <th>Total Earnings</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="green-bg">
                                <td class="track-title">Track Downloads</td>
                                <td>0</td>
                                <td>$0.00</td>
                            </tr>
                            <tr>
                                <td class="track-title"><a href="#">Track Downloads</a></td>
                                <td>0</td>
                                <td>$35.00</td>
                            </tr>
                            <tr class="green-bg">
                                <td class="total-title">Totals</td>
                                <td class="total-sales">8,305,790</td>
                                <td class="total-price">$29.11</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <table class="table" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Track</th>
                                <th>Downloadsd</th>
                                <th>Streams</th>
                                <th>Earnings</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if (count($data['allData'])>0)
                                @foreach($data['allData'] as $detail)
                                    <tr class="green-bg tr-items" line="{{$detail[0]}}">
                                        <td>{{$detail[3]}}</td>
                                        <td>3</td>
                                        <td>8,356,989</td>
                                        <td>{{$detail[10]}}</td>
                                        <td>
                                            <button class="action-btn"
                                                    onclick="makeTr($(this).closest('tr').attr('line'))"
                                                    data-modal="#modal-regards2">Details
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <table class="table tr-items" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Store</th>
                                <th>Downloads</th>
                                <th>Streams</th>
                                <th>Earnings</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if (count($data['allData'])>0)
                                @foreach($data['allData'] as $detail)
                                    <tr line="{{$detail[0]}}">
                                        <td><img class="social-icon"
                                                 src="{{asset('assets/image/royality/'. $detail[8].'.png')}}"
                                                 alt="">{{$detail[8]}}
                                        </td>
                                        <td>3</td>
                                        <td>8,356,989</td>
                                        <td>{{$detail[10]}}</td>
                                        <td>
                                            <button class="action-btn"
                                                    onclick="makeTr($(this).closest('tr').attr('line'))"
                                                    data-modal="#modal-regards2">Details
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div id="modal-regards2" class="modal">
        <div class="modal-content2">
            <button type="button" data-modal="#modal-regards2" class="modal-close">&times;</button>
            <table class="table users-table" cellspacing="0">
                <h1 class="text-dark" style="font-size: 25px">Details</h1>
                <thead>
                <tr class="page-title--2">
                    <th class="page-title--2">Start Date</th>
                    <th class="page-title--2">Transaction media title</th>
                    <th class="page-title--2">Transaction media artist name</th>
                    <th class="page-title--2">Transaction media isrc</th>
                    <th class="page-title--2">Related media title</th>
                    <th class="page-title--2">Transaction media upc</th>
                    <th class="page-title--2">Sales by territory</th>
                    <th class="page-title--2">Service/brand</th>
                    <th class="page-title--2">Commercial transaction</th>
                    <th class="page-title--2">Net Revenue</th>
                </tr>
                </thead>
                <tbody>
                <tr class="green-bg" id="modal_details">
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div id="modal-regards" class="modal">
        <div class="modal-content">
            <button type="button" data-modal="#modal-regards" class="modal-close">&times;</button>
            <form class="modal-form" action="" method="">
                <div class="modal-form--title page-title">
                    Withdrawal
                </div>
                <div class="modal-form--description page-title--2 mt-1 mb-3">
                    Amount to withdraw
                </div>
                <div class="form-group">
                    <label for="bankAccount" class="page-title--2">Country of bank account:</label>
                    <select class="form-control" id="bankAccount">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="withdrawAmount" class="page-title--2">Withdraw amount</label>
                    <input type="number" class="form-control" id="withdrawAmount" name="withdrawAmount">
                </div>
                <div class="modal-form--description page-title--2 mt-1 mb-3">
                    Bank information
                </div>
                <div class="form-group">
                    <label for="bankName" class="page-title--2">Bank name</label>
                    <input type="text" class="form-control" id="bankName" name="bankName">
                </div>
                <div class="form-group">
                    <label for="routingNumber" class="page-title--2">Routing number</label>
                    <input type="number" class="form-control" id="routingNumber" name="routingNumber">
                </div>
                <div class="form-group">
                    <label for="accountNumber" class="page-title--2">Account number</label>
                    <input type="number" class="form-control" id="accountNumber" name="accountNumber">
                </div>
                <button type="submit" class="modal-btn mt-3">Withdraw</button>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        function makeTr(line) {
            var jsArray = <?php echo count($data['allData']) > 0 ? json_encode($data['allData']) : ''; ?>;
            let tds = `<td class="block-1--description royality_tracks">${jsArray[line - 1][1]}</td>
                    <td class="block-1--description royality_tracks">${jsArray[line - 1][2]}</td>
                    <td class="block-1--description royality_tracks">${jsArray[line - 1][3]}</td>
                    <td class="block-1--description royality_tracks">${jsArray[line - 1][4]}</td>
                    <td class="block-1--description royality_tracks">${jsArray[line - 1][5]}</td>
                    <td class="block-1--description royality_tracks">${jsArray[line - 1][6]}</td>
                    <td class="block-1--description royality_tracks">${jsArray[line - 1][7]}</td>
                    <td class="block-1--description royality_tracks">${jsArray[line - 1][8]}</td>
                    <td class="block-1--description royality_tracks">${jsArray[line - 1][9]}</td>
                    <td class="block-1--description royality_tracks">${jsArray[line - 1][10]}</td>`
            $("#modal_details").html(tds);
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/javascript.util/0.12.12/javascript.util.min.js"></script>

    <script>

        let colors = {
            'TikTok': 'rgb(255, 0, 110)',
            'YouTube': 'rgb(255, 0, 110)',
            'Facebook': 'rgb(18, 193, 174)',
            'YouTube Red': 'rgb(10, 32, 62)',
            'Instagram': 'rgb(40, 126, 247)',
            'Apple Music': 'rgb(196, 130, 219)'
        }
        setTimeout(function () {
            let dataChart = <?php echo count($data['bestPerformingStores']) > 0 ? $data['bestPerformingStores'] : null; ?>;
            let labels = [];
            let data = [];
            let backgroundColor = [];
            $.each(dataChart, (key, val) => {
                labels.push(val.platform);
                data.push(val.total);
                backgroundColor.push(colors[val.platform]);
            })

            const ctx = $('#myChart');
            const myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: labels,
                    datasets: [{
                        label: '# of Votes',
                        data: data,
                        backgroundColor: backgroundColor,
                        hoverOffset: 4
                    }]
                },
            });
        }, 2000);
    </script>
    <script>
        setTimeout(function () {
            let bestPerformingCountries = <?php echo count($data['bestPerformingCountries']) > 0 ? $data['bestPerformingCountries'] : null; ?>;
            let labels = {};
            let countryName = [];
            let data = [];
            let backgroundColor = [];
            $.each(bestPerformingCountries, (key, val) => {
                labels[val.country] = {};
                countryName.push(val.country);
                data.push(val.total);
            })
            new svgMap({
                targetElementID: 'svgMap',
                data: {
                    data: {
                        gdp: {
                            // name: '',
                            //     format: '{0} USD',
                            //     thousandSeparator: ',',
                            //     thresholdMax: 50000,
                            //     thresholdMin: 1000
                            // },
                            // change: {
                            //     name: 'bbb',
                            //     // format: '{50} %'
                        }
                    },
                    applyData: 'gdp',
                    values: labels
                    // DZ: {gdp: 4293, change: 10.01}
                }
            });
            const ctx = $('#mapChart');
            const myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: countryName,
                    datasets: [{
                        label: '# of Downloads',
                        indexAxis: 'y',
                        data: data,
                        fill: false,
                        backgroundColor: [
                            'rgb(65,105,225)',
                            'rgb(65,105,225)',
                            'rgb(65,105,225)',
                            'rgb(65,105,225)',
                            'rgb(65,105,225)',
                            'rgb(65,105,225)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    plugins: {
                        tooltip: {
                            // Disable the on-canvas tooltip
                            enabled: false,
                            external: function (context) {
                                let countryCode = $(this)[0].title;
                                $('#svgMap-map-country-' + countryCode).attr('fill', 'rgb(65,105,225)');
                                // Tooltip Element
                                let tooltipEl = document.getElementById('chartjs-tooltip');
                                if (!tooltipEl) {
                                    tooltipEl = document.createElement('div');
                                    tooltipEl.id = 'chartjs-tooltip';
                                    tooltipEl.innerHTML = '<table></table>';
                                    document.body.appendChild(tooltipEl);
                                }

                                // Hide if no tooltip
                                const tooltipModel = context.tooltip;
                                if (tooltipModel.opacity === 0) {
                                    tooltipEl.style.opacity = 0;
                                    $('#svgMap-map-country-' + countryCode).attr('fill', '#cc0033');
                                    $('#svgMap-map-country-' + countryCode).css('stroke', '#fff');
                                    $('#svgMap-map-country-' + countryCode).css('stroke-width', '1');
                                    return;
                                }

                                // Set caret Position
                                tooltipEl.classList.remove('above', 'below', 'no-transform');
                                if (tooltipModel.yAlign) {
                                    tooltipEl.classList.add(tooltipModel.yAlign);
                                    $('#svgMap-map-country-' + countryCode).css('stroke', '#333');
                                    $('#svgMap-map-country-' + countryCode).css('stroke-width', '1.5');
                                    $('#svgMap-map-country-' + countryCode).attr('fill', 'rgb(65,105,225)');
                                } else {
                                    tooltipEl.classList.add('no-transform');
                                }

                                function getBody(bodyItem) {
                                    return bodyItem.lines;
                                }

                                // Set Text
                                if (tooltipModel.body) {
                                    const titleLines = tooltipModel.title || [];
                                    const bodyLines = tooltipModel.body.map(getBody);

                                    let innerHtml = '<thead>';

                                    titleLines.forEach(function (title) {
                                        innerHtml += '<tr><th>' + title + '</th></tr>';
                                    });
                                    innerHtml += '</thead><tbody>';

                                    bodyLines.forEach(function (body, i) {
                                        const colors = tooltipModel.labelColors[i];
                                        let style = 'background:' + colors.backgroundColor;
                                        style += '; border-color:' + colors.borderColor;
                                        style += '; border-width: 2px';
                                        const span = '<span style="' + style + '"></span>';
                                        innerHtml += '<tr><td>' + span + body + '</td></tr>';
                                    });
                                    innerHtml += '</tbody>';

                                    let tableRoot = tooltipEl.querySelector('table');
                                    tableRoot.innerHTML = innerHtml;
                                }

                                const position = context.chart.canvas.getBoundingClientRect();
                                const bodyFont = Chart.helpers.toFont(tooltipModel.options.bodyFont);

                                // Display, position, and set styles for font
                                tooltipEl.style.opacity = 1;
                                tooltipEl.style.position = 'absolute';
                                tooltipEl.style.left = position.left + window.pageXOffset + tooltipModel.caretX + 'px';
                                tooltipEl.style.top = position.top + window.pageYOffset + tooltipModel.caretY + 'px';
                                tooltipEl.style.font = bodyFont.string;
                                tooltipEl.style.padding = tooltipModel.padding + 'px ' + tooltipModel.padding + 'px';
                                tooltipEl.style.pointerEvents = 'none';
                            }
                        }
                    }
                }
            });
        }, 2000);
    </script>

    <script>

        setTimeout(function () {
            var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            let lineChart = <?php echo count($data['lineChart']) > 0 ? $data['lineChart'] : null; ?>;
            let labels = [];
            let data = [];
            $.each(lineChart, (key, val) => {
                var d = new Date(val.reportingMonth);
                var monthName = months[d.getMonth()];
                labels.push(monthName);
                data.push(val.totalSum);
            })
            console.log(data);
            const ctx = $('#lineChart');
            const myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Total Earnings',
                        data: [65, 59, 80, 81, 56, 55, 40],
                        fill: false,
                        borderColor: '#287ef7',
                        tension: 0.1
                    },
                        {
                            label: 'Streams',
                            data: data,
                            fill: false,
                            borderColor: '#ff006e',
                            tension: 0.1
                        },
                        {
                            label: 'Downloads',
                            data: [10, 20, 30, 40, 50, 60, 70],
                            fill: false,
                            borderColor: '#12c1ae',
                            tension: 0.1
                        },
                    ]
                },
            });
        }, 2000);
    </script>
@section('content')

