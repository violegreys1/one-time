function normalizeUrl($sentence)// как найти определенную часть из предложения 
{
  if (strpos($sentence,'https://') === 0) // находит https:// в переменой $sentence
  { 
      return ($sentence); // возвращает переменную 
  }
  else if (strpos($sentence,'http://') === 0) // в другом случае http:// в перенменной $sentence
  {
    return ('https://' . substr($sentence, 7)); // возвращает 'https://' и символ начиная с 8 позиции переменной 
  }
  else 
  {
     return ('https://' . $sentence);  // возвращает конкатенацию https:// и переменной 
  }
}
// эта функция для работы с If, else , else if
