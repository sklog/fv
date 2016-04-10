<?php
$name = explode('/', $_SERVER['REQUEST_URI']);

$v = array(schetchiki,radiatory,trybi,polotencesyshitel,pol,smesitel,dyshevaia,vodonagrevatel,ynitaz,vanna);
foreach($v as $key=>$value)
{
if ($name[1]==$value)
{$style[$key]="text-decoration:underline;color:orange";}
}

echo <<<TXT
<div class="dop_menu">
<table style="text-align: left; width: 100%;height:120px" border="0"
 cellpadding="2" cellspacing="2">
  <tbody>
    <tr>
      <td>
        <ul>
        <a class="text_ramka" href="schetchiki"><div style="$style[0]" class="ramka_4">Счетчики воды. Установка и замена</div></a>
        <a class="text_ramka" href="radiatory"><div style="$style[1]" class="ramka_4">Замена радиаторов отопления</div></a>
        <a class="text_ramka" href="trybi"><div style="$style[2]" class="ramka_4">Замена труб водоснабжения и канализации</div></a>
        <a class="text_ramka" href="polotencesyshitel"><div style="$style[3]" class="ramka_4">Установка полотенцесушителя</div></a>
        <a class="text_ramka" href="pol"><div style="$style[4]" class="ramka_4">Установка теплого пола</div></a>
      </ul>
      </td>
      <td>
        <ul>
          <a class="text_ramka" href="smesitel"><div style="$style[5]" class="ramka_4">Установка смесителя</div></a>
          <a class="text_ramka" href="dyshevaia"><div style="$style[6]" class="ramka_4">Установка душевой кабины</div></a>
          <a class="text_ramka" href="vodonagrevatel"><div style="$style[7]" class="ramka_4">Установка водонагревателя</div></a>
          <a class="text_ramka" href="ynitaz"><div style="$style[8]" class="ramka_4">Установка унитаза</div></a>
          <a class="text_ramka" href="vanna"><div style="$style[9]" class="ramka_4">Установка ванны, умывальника</div></a>
        </ul>
      </td>
    </tr>
  </tbody>
</table>
</div>
TXT;
?>
