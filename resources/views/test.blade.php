Hello World!!!
<br/>
{{ $nome }}
{{ $variavel }}
<br/>
{{ $variavel . ' ' . $nome }}
<br/>
{{ 2 + 2 }}
<br/>
{{ isset($test)?$test:"outro valor" }}
<br/>
{{ $test??"outro valor" }}
<br/>
{{ $test or "outro valor" }}
<br/><br/><br/><br/><br/><br/>
{{ "<h1>Estudando Laravel</h1>" }}
<br/><br/><br/><br/><br/><br/>
{!! "<h1>Estudando Laravel</h1>" !!}
