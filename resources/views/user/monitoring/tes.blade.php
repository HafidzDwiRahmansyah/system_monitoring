<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servo Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/echarts/dist/echarts.min.js"></script>
</head>

<body>
    <div id="servoChart" style="width: 100%; height: 400px;"></div>

    <script>
        // Inisialisasi ECharts
        var myChart = echarts.init(document.getElementById('servoChart'));

        // Fungsi untuk mengambil data servo1 dari endpoint
        async function fetchServo1Data() {
            try {
                const response = await fetch('/api/servo1');
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                const data = await response.json();
                return data;
            } catch (error) {
                console.error('Fetching data failed:', error);
                return []; // Mengembalikan array kosong jika terjadi kesalahan
            }
        }

        // Fungsi untuk memperbarui chart dengan data terbaru
        async function updateChart() {
            const servo1Data = await fetchServo1Data();

            // Data fiktif untuk pengujian
            var data = {
                servo1: servo1Data,
                servo2: [{
                        name: '2024-07-01',
                        value: 5
                    },
                    {
                        name: '2024-07-02',
                        value: 7
                    },
                    {
                        name: '2024-07-03',
                        value: 6
                    },
                    {
                        name: '2024-07-04',
                        value: 8
                    },
                    {
                        name: '2024-07-05',
                        value: 5
                    },
                    {
                        name: '2024-07-06',
                        value: 6
                    },
                    {
                        name: '2024-07-07',
                        value: 9
                    },
                    {
                        name: '2024-07-08',
                        value: 4
                    },
                    {
                        name: '2024-07-09',
                        value: 7
                    },
                    {
                        name: '2024-07-10',
                        value: 10
                    }
                ],
                servo3: [{
                        name: '2024-07-01',
                        value: 20
                    },
                    {
                        name: '2024-07-02',
                        value: 22
                    },
                    {
                        name: '2024-07-03',
                        value: 18
                    },
                    {
                        name: '2024-07-04',
                        value: 25
                    },
                    {
                        name: '2024-07-05',
                        value: 17
                    },
                    {
                        name: '2024-07-06',
                        value: 20
                    },
                    {
                        name: '2024-07-07',
                        value: 23
                    },
                    {
                        name: '2024-07-08',
                        value: 18
                    },
                    {
                        name: '2024-07-09',
                        value: 21
                    },
                    {
                        name: '2024-07-10',
                        value: 24
                    }
                ],
                servo4: [{
                        name: '2024-07-01',
                        value: 15
                    },
                    {
                        name: '2024-07-02',
                        value: 17
                    },
                    {
                        name: '2024-07-03',
                        value: 14
                    },
                    {
                        name: '2024-07-04',
                        value: 20
                    },
                    {
                        name: '2024-07-05',
                        value: 13
                    },
                    {
                        name: '2024-07-06',
                        value: 16
                    },
                    {
                        name: '2024-07-07',
                        value: 19
                    },
                    {
                        name: '2024-07-08',
                        value: 14
                    },
                    {
                        name: '2024-07-09',
                        value: 17
                    },
                    {
                        name: '2024-07-10',
                        value: 22
                    }
                ],
                servo5: [{
                        name: '2024-07-01',
                        value: 30
                    },
                    {
                        name: '2024-07-02',
                        value: 32
                    },
                    {
                        name: '2024-07-03',
                        value: 28
                    },
                    {
                        name: '2024-07-04',
                        value: 35
                    },
                    {
                        name: '2024-07-05',
                        value: 27
                    },
                    {
                        name: '2024-07-06',
                        value: 30
                    },
                    {
                        name: '2024-07-07',
                        value: 33
                    },
                    {
                        name: '2024-07-08',
                        value: 28
                    },
                    {
                        name: '2024-07-09',
                        value: 31
                    },
                    {
                        name: '2024-07-10',
                        value: 34
                    }
                ]
            };

            // Periksa apakah data servo1 kosong
            if (data.servo1.length === 0) {
                console.warn('No data available for Servo 1');
                return; // Berhenti jika tidak ada data
            }

            // Labels dan data untuk ECharts
            var labels = data.servo1.map(item => item.name);
            var servo1Values = data.servo1.map(item => item.value);
            var servo2Values = data.servo2.map(item => item.value);
            var servo3Values = data.servo3.map(item => item.value);
            var servo4Values = data.servo4.map(item => item.value);
            var servo5Values = data.servo5.map(item => item.value);

            // Opsi chart
            var option = {
                tooltip: {
                    trigger: 'axis'
                },
                legend: {
                    data: ['Servo 1', 'Servo 2', 'Servo 3', 'Servo 4', 'Servo 5']
                },
                xAxis: {
                    type: 'category',
                    data: labels
                },
                yAxis: {
                    type: 'value',
                },
                series: [{
                        name: 'Servo 1',
                        type: 'line',
                        data: servo1Values,
                        itemStyle: {
                            color: 'red'
                        }
                    },
                    {
                        name: 'Servo 2',
                        type: 'line',
                        data: servo2Values,
                        itemStyle: {
                            color: 'yellow'
                        }
                    },
                    {
                        name: 'Servo 3',
                        type: 'line',
                        data: servo3Values,
                        itemStyle: {
                            color: 'green'
                        }
                    },
                    {
                        name: 'Servo 4',
                        type: 'line',
                        data: servo4Values,
                        itemStyle: {
                            color: 'blue'
                        }
                    },
                    {
                        name: 'Servo 5',
                        type: 'line',
                        data: servo5Values,
                        itemStyle: {
                            color: 'black'
                        }
                    }
                ]
            };
            myChart.setOption(option);
        }

        // Memperbarui chart setiap 1 detik
        setInterval(updateChart, 1000);

        // Pertama kali memuat data dan menampilkan chart
        updateChart();
    </script>
</body>

</html>