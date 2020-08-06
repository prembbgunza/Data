function charat()
{
      var vchar = String.fromCharCode(event.keyCode);
        if ((vchar<'a' || vchar>'z') && (vchar<'A' || vchar>'Z') && (vchar<'0' || vchar>'9')
        && (vchar<'ก' || vchar>'ฮ')
        && vchar !== 'ะ'
        && vchar !== 'า'
        && vchar !== 'ิ'
        && vchar !== 'ี'
        && vchar !== 'ึ'
        && vchar !== 'ื'
        && vchar !== 'ุ'
        && vchar !== 'ู'
        && vchar !== 'เ'
        && vchar !== 'โ'
        && vchar !== 'ำ'
        && vchar !== 'ไ'
        && vchar !== '่'
        && vchar !== '้'
        && vchar !== '๊'
        && vchar !== 'ั'
        && vchar !== 'ๆ'
        && vchar !== '๋'
        && vchar !== 'แ'
        && vchar !== '็'
        && vchar !== '์') return false;
        ele.OnKeyPress=vchar;
}