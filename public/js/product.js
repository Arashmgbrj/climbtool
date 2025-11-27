function change1(url){
    document.getElementById("img_product_main").setAttribute("src",url);

    document.getElementById("c1").style.border = '3px solid black';
    document.getElementById("c1").style.opacity = '1';
    document.getElementById("c2").style.border = '';
    document.getElementById("c2").style.opacity = '0.5';

    document.getElementById("c3").style.border = '';
    document.getElementById("c3").style.border = '0.5';
  
    
}
function change2(url){
    document.getElementById("img_product_main").setAttribute("src",url);

    document.getElementById("c2").style.border = '3px solid black';
    document.getElementById("c2").style.opacity = '1';
  
    document.getElementById("c1").style.border = '';
    document.getElementById("c1").style.opacity = '0.5';
    document.getElementById("c3").style.border = '';
    document.getElementById("c3").style.border = '0.5';

    
}
function change3(url){
    document.getElementById("img_product_main").setAttribute("src",url);

    document.getElementById("c3").style.border = '3px solid black';
    document.getElementById("c3").style.opacity = '1';
    document.getElementById("c2").style.border = '';
    document.getElementById("c2").style.opacity = '0.5';
    document.getElementById("c1").style.border = '';
    document.getElementById("c1").style.opacity = '0.5';
    
}
function product_img_round()
{
    c = 1;
    var urls = [document.getElementById("c1").getAttribute('src'),document.getElementById('c2').getAttribute('src'),document.getElementById('c3').getAttribute('src')]
    setInterval(()=>{
        if(c ==1){
            document.getElementById(`c3`).style.border = '';
            document.getElementById(`c3`).style.opacity = '0.5';
            document.getElementById(`c2`).style.border = '';
            document.getElementById(`c2`).style.opacity = '0.5';
        }
        if(c ==2){
            document.getElementById(`c3`).style.border = '';
            document.getElementById(`c3`).style.opacity = '0.5';
            document.getElementById(`c1`).style.border = '';
            document.getElementById(`c1`).style.opacity = '0.5';
        }
        else if(c == 3){
            document.getElementById(`c1`).style.border = '';
            document.getElementById(`c1`).style.opacity = '0.5';
            document.getElementById(`c2`).style.border = '';
            document.getElementById(`c2`).style.opacity = '0.5';
        }
        document.getElementById("img_product_main").setAttribute('src',urls[c-1]);
        document.getElementById(`c${c}`).style.border = '3px solid black';
        document.getElementById(`c${c}`).style.opacity = '1';

        c++;
        if(c-1 == 3 && c == 4)
        {
            c =1
        }



    },5000);
}
function dunder_number()
{ 

    var counter =  document.getElementById('product-count').getAttribute('value')

    document.getElementById('product-count').setAttribute('value',counter-1);
    if(counter<=0){
        counter = 0;
        document.getElementById('product-count').setAttribute('value',0);
    }
    
}
var counter_add = 0
function add_number()
{   
    var counter =  document.getElementById('product-count').getAttribute('value')
    document.getElementById('product-count').setAttribute('value',counter_add++);
    
}
function ul_pro_1()
{
    document.getElementById("about_pro").style.display = "block";     
    document.getElementById("abt_t_p1").style.display = "none";
    document.getElementById("p_abouts1").style.backgroundColor =  '#0068C8' 
    document.getElementById("p_abouts1").style.color =  'white' 
    document.getElementById("p_abouts2").style.backgroundColor = '#FFFFFF' 
    document.getElementById("p_abouts2").style.color = 'black' 
    document.getElementById("p_abouts3").style.backgroundColor = '#FFFFFF'    
    document.getElementById("p_abouts3").style.color = 'black'   
}
function ul_pro_2()
{
    document.getElementById("about_pro").style.display = "none";     
    document.getElementById("abt_t_p1").style.display = "block";
    document.getElementById("p_abouts1").style.backgroundColor =  '#FFFFFF' 
    document.getElementById("p_abouts1").style.color =  'black' 
    document.getElementById("p_abouts2").style.backgroundColor = '#0068C8' 
    document.getElementById("p_abouts2").style.color = 'white' 
    document.getElementById("p_abouts3").style.backgroundColor = '#FFFFFF'    
    document.getElementById("p_abouts3").style.color = 'black'    
}

product_img_round();