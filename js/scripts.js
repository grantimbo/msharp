/* -------------------------------
Author : Grant Imbo (grantimbo.com)
Version : 1
Description : Writted by Grant. Site functionality for tarikugroup.com
------------------------------- */

// header
const toggleMenu = () => {
    console.log('test')
    document.querySelector('.menu-shadow').classList.toggle('active');
    document.querySelector('.menu-nav').classList.toggle('active');
}


// contact
const btnGeneral = () =>  {
    document.querySelector('.btn.investor').classList.remove('active');
    document.querySelector('.btn.general').classList.add('active');
    document.querySelector('p.existing-holder').classList.add('d-none');
}
const btnInvestor = () => {
    document.querySelector('.btn.general').classList.remove('active');
    document.querySelector('.btn.investor').classList.add('active');
    document.querySelector('p.existing-holder').classList.remove('d-none');
}



console.log(
' -------------------------------\n',
'Author : Grant Imbo (grantimbo.com)\n',
'Version : 1\n',
'Theme Repository : https://github.com/grantimbo/jmiller\n',
'Description : A custom vanilla js for https://juniormiller.com\n',
'-------------------------------' );