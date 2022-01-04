<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JSON Open data</title>
    <link href="/css/opendata.css" rel="stylesheet">
</head>
<style>
    td{
        display: block;
    }
    th{
        display:inline;
    }
    table {
        display: inline-block;
        border: 1px solid;
        float: left;
        padding: 5px 10px 5px 10px;
        margin: 10px 15px 100px 5px;
    }
</style>
<body>
{{--@foreach($emissions->value as $emission)--}}
{{--    {{$emission->CO2_1}}--}}
{{--@endforeach--}}
<h1>Open Data</h1>
<hr>
<table>
    <thead>
    <tr>
        <th>Particulier huishouden periode</th>
        <th>Bronnen</th>
        @foreach($emissions->value as $emission)
            <td>
                {{$emission->CO2_1}}
            </td>
        @endforeach
    </tr>
</table>
<table>
    <tr>
        <th>Perioden</th>
        @foreach($emissions->value as $emission)
            <td>
                {{$emission->CO2_1}}
            </td>
        @endforeach
    </tr>
</table>
<table>
    <tr>
        <th>CO2_1</th>
        @foreach($emissions->value as $emission)
            <td>
                {{$emission->CO2_1}}
            </td>
        @endforeach
    </tr>
</table>
<table>
    <tr>
        <th>NMVOS_2</th>
        @foreach($emissions->value as $emission)
            <td>
                {{$emission->CO2_1}}
            </td>
        @endforeach
    </tr>
</table>
<table>
    <tr>
        <th>CH4_3</th>
        @foreach($emissions->value as $emission)
            <td>
                {{$emission->CO2_1}}
            </td>
        @endforeach
    </tr>
</table>
<table>
    <tr>
        <th>SO2_4</th>
        @foreach($emissions->value as $emission)
            <td>
                {{$emission->CO2_1}}
            </td>
        @endforeach
    </tr>
</table>
<table>
    <tr>
        <th>N2O_5</th>
        @foreach($emissions->value as $emission)
            <td>
                {{$emission->CO2_1}}
            </td>
        @endforeach
    </tr>
</table>
<table>
    <tr>
        <th>CO_6</th>
        @foreach($emissions->value as $emission)
            <td>
                {{$emission->CO2_1}}
            </td>
        @endforeach
    </tr>
</table>
<table>
    <tr>
        <th>NOx_7</th>
        @foreach($emissions->value as $emission)
            <td>
                {{$emission->CO2_1}}
            </td>
        @endforeach
    </tr>
</table>
<table>
    <tr>
        <th>NH3_8</th>
        @foreach($emissions->value as $emission)
            <td>
                {{$emission->CO2_1}}
            </td>
        @endforeach
    </tr>
</table>
<table>
    <tr>
        <th>ON10_9</th>
        @foreach($emissions->value as $emission)
            <td>
                {{$emission->CO2_1}}
            </td>
        @endforeach
        <th>ID</th>
        <th>CO2_1 MLN KG</th>
    </tr>
    <tbody>
    @foreach ($datas->value as $data)
        <tr>
            @if($data->ID >230)
                @if($data->ID < 252)
                    <td>{{$data->Perioden}}</td>
                    <td>{{$data->Bronnen}}</td>
                    <td>{{$data->ID}}</td>
                    <td>{{$data->CO2_1}}</td>
                @endif
            @endif
        </tr>
    @endforeach
    </tbody>
</table>

<div class="chart">
    <dl>
        <dt>Staafdiagram Particulier Huishouden</dt>
        <dd class="percentage percentage-88">
    <span class="text">
      1990: 88,15%
    </span>
        </dd>
        <dd class="percentage percentage-98">
    <span class="text">
      1995: 98,7%
    </span>
        </dd>
        <dd class="percentage percentage-88">
    <span class="text">
      2000: 88,03%
    </span>
        </dd>
        <dd class="percentage percentage-92">
    <span class="text">
      2001: 92,91%
    </span>
        </dd>
        <dd class="percentage percentage-89">
    <span class="text">
      2002:89,80%
    </span>
        </dd>
        <dd class="percentage percentage-91">
    <span class="text">
      2003: 91,89%
    </span>
        </dd>
        <dd class="percentage percentage-88">
    <span class="text">
      2004: 88,43%
    </span>
        </dd>
        <dd class="percentage percentage-85">
    <span class="text">
      2005: 85,63%
    </span>
        </dd>
        <dd class="percentage percentage-86">
    <span class="text">
      2006: 86,57%
    </span>
        </dd>
        <dd class="percentage percentage-78">
    <span class="text">
      2007: 78,15%
    </span>
        </dd>
        <dd class="percentage percentage-87">
    <span class="text">
      2008: 87,36%
    </span>
        </dd>
        <dd class="percentage percentage-86">
    <span class="text">
      2009: 86,97%
    </span>
        </dd>
        <dd class="percentage percentage-100">
    <span class="text">
      2010: 100%
    </span>
        </dd>
        <dd class="percentage percentage-79">
    <span class="text">
      2011: 79,60%
    </span>
        </dd>
        <dd class="percentage percentage-84">
    <span class="text">
      2012: 84,61%
    </span>
        </dd>
        <dd class="percentage percentage-89">
    <span class="text">
      2013: 89,49%
    </span>
        </dd>
        <dd class="percentage percentage-69">
    <span class="text">
      2014: 69,17%
    </span>
        </dd>
        <dd class="percentage percentage-73">
    <span class="text">
      2015: 73,35%
    </span>
        </dd>
        <dd class="percentage percentage-76">
    <span class="text">
      2016: 76,22%
    </span>
        </dd>
        <dd class="percentage percentage-74">
    <span class="text">
      2017: 74,53%
    </span>
        </dd>
        <dd class="percentage percentage-74">
    <span class="text">
      2018: 74,25%
    </span>
        </dd>
    </dl>
</div>
</body>
</html>
