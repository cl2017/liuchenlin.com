window.addEventListener("load",eventWindowLoaded,false);
function eventWindowLoaded()
{
    canvasApp();
    console.log("程序開始！")
}

function PItoDegree(p)
{
    return p*180/Math.PI
}

function canvasApp()
{
    drawScreen();
    function drawScreen()
    {
        var theCanvas = document.getElementById("canvasOne");
        if(!theCanvas||!theCanvas.getContext)
        {
            return;
        }
    
        var context = theCanvas.getContext("2d");
        drawAppleLogo(context);

     }
}

function drawText(context,string,position_,direction)
{
    offset = 12;
    position = new point(position_.x,position_.y);
    switch (direction)
    {
        case "up":
            position.y-=offset;
            break
        case "down":
            position.y+=offset;
            break
        case "left":
            position.x-=offset;
            break
        case "right":
            position.x+=offset;
            break
        case "up-left":
            position.y-=offset;
            position.x-=offset;
            break
        case "up-right":
            position.y-=offset;
            position.x+=offset;
            break
        case "down-left":
            position.y+=offset;
            position.x-=offset;
            break
        case "down-right":
            position.y+=offset;
            position.x+=offset;
            break
    }
    context.font = "15px Gentium"
    context.textBaseline = "middle"
    context.textAlign = "center"
    context.fillText(string,position.x,position.y)
 }

function point(x,y)//点结构
{
    this.x = x;
    this.y = y;
}

function drawline(context,p1,p2)//用两点画一直线
{
    context.moveTo(p1.x,p1.y)
    context.lineTo(p2.x,p2.y)
}

function distance(p1,p2)//求两点距离
{
    
    return Math.sqrt(Math.pow((p1.x-p2.x),2)+Math.pow((p1.y-p2.y),2))
}

function pointRotation(o,angle,radius)//在一个笛卡尔坐标系，将点绕某点旋转一定角度后的坐标
{
    p_R_x = o.x-Math.sin(angle)*radius;
    p_R_y = o.y-Math.cos(angle)*radius;
    return new point(p_R_x,p_R_y)
}


function pointRotation2(o,p,angle)//在一个笛卡尔坐标系，将点绕某点旋转一定角度后的坐标
{
    radius = distance(o,p)
    if (radius == 0)
    radius = 1;
    
    var _angle;
    if (p.y<=o.y && p.x<=o.x)
    {
        _angle = Math.asin((o.x-p.x)/radius);
    }
    else if(p.y<=o.y && p.x>=o.x)
    {
        _angle = Math.asin((p.x-o.x)/radius);
        _angle = Math.PI*2-_angle;

    }
    else if(p.y>=o.y && p.x<=o.x)
    {
        _angle = Math.asin((o.x-p.x)/radius);
        _angle = Math.PI-_angle;

    }
    else if(p.y>=o.y && p.x>=o.x)
    {
        _angle = Math.asin((p.x-o.x)/radius);
        _angle = Math.PI+_angle;
    }


    
    p_R_x = o.x-Math.sin(_angle+angle)*radius;
    p_R_y = o.y-Math.cos(_angle+angle)*radius;
    return new point(p_R_x,p_R_y)

}



function drawArc(context,p,radius,angle_s,angle_e)
{
   context.arc(p.x,p.y,radius,angle_s,angle_e,false)
}

function drawArc2(context,p1,p2,o,direction)
{
    radius = distance(o,p1)
    if (radius == 0)
    radius = 1;
    //圆弧角度
    p_O0 = new point(o.x+radius,o.y)//右边的点
    edge_1 = distance(p1,p_O0)
    angle_1 = Math.acos(edge_1/2/radius)
    angle_s = Math.PI -2*angle_1
    if (p1.y<o.y)
    angle_s = Math.PI*2-angle_s;
    
    
    edge_2 = distance(p2,p_O0);
    angle_2 = Math.acos(edge_2/2/radius);
    angle_e = Math.PI -2*angle_2;
    if (p2.y<o.y)
    angle_e = Math.PI*2-angle_e;
    if(direction=="false")
    context.arc(o.x,o.y,radius,angle_s,angle_e,false);
    else
    context.arc(o.x,o.y,radius,angle_s,angle_e,true);

}

function drawCircle(context,o,radius)
{
    context.arc(o.x,o.y,radius,0,Math.PI*2,false)

}

function tangleObject(p,t1,t2)
{
    this.p = p;
    this.t1 = t1;
    this.t2 = t2;
}

 function insideTangleCircle(p1,r1,p2,r2,r,direction)
 {
     edge_p1p2 = distance(p1,p2)
     edge_pp1 = r-r1
     edge_pp2 = r-r2
     angle_p1 = Math.acos((Math.pow(edge_p1p2,2)+Math.pow(edge_pp1,2)-Math.pow(edge_pp2,2))/(2*edge_p1p2*edge_pp1))
     
     radius = distance(p1,p2)
     if (radius == 0)
     radius = 1;
     
     var _angle;
     if (p2.y<=p1.y && p2.x<=p1.x)
     {
         _angle = Math.asin((p1.x-p2.x)/radius);
     }
     else if(p2.y<=p1.y && p2.x>=p1.x)
     {
         _angle = Math.asin((p2.x-p1.x)/radius);
         _angle = Math.PI*2-_angle;
         
     }
     else if(p2.y>=p1.y && p2.x<=p1.x)
     {
         _angle = Math.asin((p1.x-p2.x)/radius);
         _angle = Math.PI-_angle;
         
     }
     else if(p2.y>=p1.y && p2.x>=p1.x)
     {
         _angle = Math.asin((p2.x-p1.x)/radius);
         _angle = Math.PI+_angle;
     }
     
     switch(direction)
     {
         case "left":
         angle = _angle-angle_p1
         break;
         case "right":
         angle = _angle+angle_p1
         break;
         default:
         angle = _angle-angle_p1
     }
     
     p = pointRotation(p1,angle,edge_pp1)
     t1 = pointRotation(p1,angle,r1)
     
     gama = (r-2*r2)/r2
     t2_x =(p.x + gama*p2.x)/(1+gama)
     t2_y =(p.y + gama*p2.y)/(1+gama)
     t2 = new point(t2_x,t2_y)
     
     return new tangleObject(p,pointRotation2(p1,t1,Math.PI),pointRotation2(p2,t2,Math.PI))

 }

function intersectCircle(p1,r1,p2,r2)
{
    radius = distance(p1,p2)
    angle = Math.acos((Math.pow(radius,2)+Math.pow(r1,2)-Math.pow(r2,2))/(2*radius*r1))
    var _angle
    if (p2.y<=p1.y && p2.x<=p1.x)
    {
        _angle = Math.asin((p1.x-p2.x)/radius);
    }
    else if(p2.y<=p1.y && p2.x>=p1.x)
    {
        _angle = Math.asin((p2.x-p1.x)/radius);
        _angle = Math.PI*2-_angle;
        
    }
    else if(p2.y>=p1.y && p2.x<=p1.x)
    {
        _angle = Math.asin((p1.x-p2.x)/radius);
        _angle = Math.PI-_angle;
        
    }
    else if(p2.y>=p1.y && p2.x>=p1.x)
    {
        _angle = Math.asin((p2.x-p1.x)/radius);
        _angle = Math.PI+_angle;
    }
    
    i1= pointRotation(p1,_angle+angle,r1)
    i2 = pointRotation(p1,_angle-angle,r1)
    return {"i1":i1,"i2":i2}

}

function outsideTangleCircle(p1,r1,p2,r2,r,direction)
{
    edge_p1p2 = distance(p1,p2)
    edge_pp1 = r1+r
    edge_pp2 = r2+r
    angle_p1 = Math.acos((Math.pow(edge_p1p2,2)+Math.pow(edge_pp1,2)-Math.pow(edge_pp2,2))/(2*edge_p1p2*edge_pp1))
    
    radius = distance(p1,p2)
    if (radius == 0)
    radius = 1;
    
    var _angle;
    if (p2.y<=p1.y && p2.x<=p1.x)
    {
        _angle = Math.asin((p1.x-p2.x)/radius);
    }
    else if(p2.y<=p1.y && p2.x>=p1.x)
    {
        _angle = Math.asin((p2.x-p1.x)/radius);
        _angle = Math.PI*2-_angle;
        
    }
    else if(p2.y>=p1.y && p2.x<=p1.x)
    {
        _angle = Math.asin((p1.x-p2.x)/radius);
        _angle = Math.PI-_angle;
        
    }
    else if(p2.y>=p1.y && p2.x>=p1.x)
    {
        _angle = Math.asin((p2.x-p1.x)/radius);
        _angle = Math.PI+_angle;
    }
    
    switch(direction)
    {
        case "left":
        angle = _angle-angle_p1
        break;
        case "right":
        angle = _angle+angle_p1
        break;
        default:
        angle = _angle-angle_p1
    }
    
    p = pointRotation(p1,angle,edge_pp1)
    t1 = pointRotation(p1,angle,r1)
    
    gama = r/r2
    t2_x =(p.x + gama*p2.x)/(1+gama)
    t2_y =(p.y + gama*p2.y)/(1+gama)
    t2 = new point(t2_x,t2_y)
    
    return new tangleObject(p,t1,t2)
}

function drawAppleLogo(context)
{
    //先画一个圆
    u = 25;
    context.beginPath()
    
    radius13 = u/0.618/0.618/0.618/0.618/0.618;//半径
    radius8 = u/0.618/0.618/0.618/0.618
    radius5 = u/0.618/0.618/0.618
    radius3 = u/0.618/0.618
    radius2 = u/0.618
    radius1 = u
    
    
   // v/0.618/0.618/0.618 =u/0.618+u/0.618/0.618/0.618/0.618/2
   // v/0.23603 = u/0.618+u/0.29173
    v = 0.23603*(u/0.618+u/0.29173)
    
    lv13 = v/0.618/0.618/0.618/0.618/0.618;//边
    lv8 = v/0.618/0.618/0.618/0.618
    lv5 = v/0.618/0.618/0.618
    lv3 = v/0.618/0.618
    lv2 = v/0.618
    lv1 = v


    p_O = new point(450,450); //圆心
    p_C = new point(p_O.x,p_O.y-lv13)
    p_B = pointRotation(p_O,Math.PI/2,lv13)
    p_O2 = new point(p_B.x+lv8,p_B.y)
    p_D = new point(p_O2.x,p_O2.y+lv8)
    p_O3 = new point(p_D.x,p_D.y-lv5)
    p_E = pointRotation(p_O3,Math.PI*3/2,lv5)
    p_O4 = new point(p_E.x-lv3,p_E.y)
    p_F = new point(p_O4.x,p_O4.y-lv3)
    p_O5 = new point(p_F.x,p_F.y+lv2)
    p_G = new point(p_O5.x-lv2,p_O5.y)
    p_O6 = new point(p_G.x+lv1,p_G.y)
    p_J = new point(p_O6.x,p_O6.y+lv1)
    p_I = new point(p_G.x+radius2/2,p_J.y)
    p_K = new point(p_I.x+radius2/2+radius8/2,p_I.y)
    p_L = new point(p_K.x,p_K.y-radius8)
    p_M = new point(p_L.x,p_L.y-radius8*3/4)
    p_P = new point(p_I.x-radius2/2-radius5/2,p_I.y)
    
    rotation = Math.PI/180*45
    //旋转45度
    p_C = pointRotation2(p_O,p_C,rotation)
    p_B = pointRotation2(p_O,p_B,rotation)
    p_O2 = pointRotation2(p_O,p_O2,rotation)
    p_D = pointRotation2(p_O,p_D,rotation)
    p_O3 = pointRotation2(p_O,p_O3,rotation)
    p_E = pointRotation2(p_O,p_E,rotation)
    p_O4 = pointRotation2(p_O,p_O4,rotation)
    p_F = pointRotation2(p_O,p_F,rotation)
    p_O5 = pointRotation2(p_O,p_O5,rotation)
    p_G = pointRotation2(p_O,p_G,rotation)
    p_O6 = pointRotation2(p_O,p_O6,rotation)
    p_J = pointRotation2(p_O,p_J,rotation)
    p_K = pointRotation2(p_O,p_K,rotation)
    p_L = pointRotation2(p_O,p_L,rotation)
    p_M = pointRotation2(p_O,p_M,rotation)
    p_P = pointRotation2(p_O,p_P,rotation)
    p_I = pointRotation2(p_O,p_I,rotation)
    
    //以下的点不旋转
     p_R = new point(p_P.x-radius5/2-radius1/2,p_P.y)
     p_S = new point(p_P.x-radius5-radius1,p_P.y)
     
     p_Q_y = p_S.y-radius5/2-radius1-radius8/2
     //Math.sqrt((p_Q_y-p_L.y)*(p_Q_y-p_L.y)+(p_Q_x-p_L.x)*(p_Q_x-p_L.x)) = radius8
     p_Q_x = p_L.x -Math.sqrt(Math.pow(radius8,2) -(p_Q_y-p_L.y)*(p_Q_y-p_L.y))
     p_Q = new point(p_Q_x,p_Q_y)
     
    temp = outsideTangleCircle(p_Q,radius8/2,p_S,radius5/2,radius3/2,"")
    p_T = temp.p
    temp2 = insideTangleCircle(p_Q,radius8/2,p_S,radius5/2,lv13*0.618,"right")
    p_U = temp2.p
    p_Ut1 = temp2.t1
    p_Ut2 = temp2.t2
    temp3 = outsideTangleCircle(p_S,radius5/2,p_P,radius5/2,radius8/2,"left")
    p_V = temp3.p
    p_Vt1 = temp3.t1
    p_Vt2 = temp3.t2
    
    
    //镜像圆Q,T
    offset_Q_x = (p_R.x-p_Q.x)*2
    offset_T_x = (p_R.x-p_T.x)*2
    p_Q2 = new point(p_Q.x+offset_Q_x,p_Q.y)
    p_T2 = new point(p_T.x+offset_T_x,p_T.y)

    temp4 = insideTangleCircle(p_Q2,radius8/2,p_P,radius5/2,lv13*0.618,"left")
    p_U2 = temp4.p
    p_U2t1 = temp4.t1
    p_U2t2 = temp4.t2
    
   
    
    temp5 = outsideTangleCircle(p_Q,radius8/2,p_Q2,radius8/2,radius8/2,"right")
    p_W = temp5.p
    p_Wt1 = temp5.t1
    p_Wt2 = temp5.t2


    temp6 = intersectCircle(p_M,radius8/2,p_L,radius8/2)
    p_Mi1 = temp6.i1;
    p_Mi2 = temp6.i2;
    
    temp7 = intersectCircle(p_Q2,radius8/2,p_K,radius8/2)
    p_Q2i1 = temp7.i1;
    p_Q2i2 = temp7.i2;
    
    temp8 = intersectCircle(p_T2,radius3/2,p_K,radius8/2)
    p_T2i1 = temp8.i1;
    p_T2i2 = temp8.i2;
    
    context.fillStyle ="white"
    context.beginPath()
    context.moveTo(p_Vt2.x,p_Vt2.y)
    drawArc2(context,p_Vt2,p_Vt1,p_V,"")
    drawArc2(context,p_Vt1,p_Ut2,p_S,"false")
    drawArc2(context,p_Ut2,p_Ut1,p_U,"false")//
    drawArc2(context,p_Ut1,p_Wt1,p_Q,"false")
    drawArc2(context,p_Wt1,p_Wt2,p_W,"")
    drawArc2(context,p_Wt2,p_Q2i1,p_Q2,"false")//
    drawArc2(context,p_Q2i1,p_T2i2,p_K,"")//
    drawArc2(context,p_T2i2,p_U2t2,p_U2,"false")//
    drawArc2(context,p_U2t2,p_Vt2,p_P,"false")
    context.closePath()
    context.fill()
    
    context.beginPath()
    context.moveTo(p_Mi1.x,p_Mi1.y)
    drawArc2(context,p_Mi1,p_Mi2,p_M,"false")
    drawArc2(context,p_Mi2,p_Mi1,p_L,"false")
    context.closePath()
    context.fill()
    
    /*
    drawText(context,"O",p_O,"");
    drawText(context,"C",p_C,"up");
    drawText(context,"O2",p_O2,"")
    drawText(context,"B",p_B,"left");
    drawText(context,"O3",p_O3,"")
    drawText(context,"D",p_D,"down")
    drawText(context,"E",p_E,"right")
    drawText(context,"O4",p_O4,"")
    drawText(context,"F",p_F,"up")
    drawText(context,"O5",p_O5,"")
    drawText(context,"G",p_G,"left")
    drawText(context,"J",p_J,"left")
    drawText(context,"K",p_K,"")
    drawText(context,"L",p_L,"")
    drawText(context,"M",p_M,"")
    drawText(context,"P",p_P,"")
    drawText(context,"I",p_I,"")
    drawText(context,"Q",p_Q,"")
    drawText(context,"R",p_R,"")
    drawText(context,"S",p_S,"")
    drawText(context,"T",p_T,"")
    drawText(context,"U_t1",p_Ut1,"left")
    drawText(context,"U_t2",p_Ut2,"left")
    drawText(context,"V_t1",p_Vt1,"down")
    drawText(context,"V_t2",p_Vt2,"down")
    drawText(context,"W_t1",p_Wt1,"up")
    drawText(context,"W_t2",p_Wt2,"up")
    drawText(context,"M_i1",p_Mi1,"")
    drawText(context,"M_i2",p_Mi2,"")
    drawText(context,"T2",p_T2,"")
    drawText(context,"T2_i1",p_T2i1,"")
    drawText(context,"T2_i2",p_T2i2,"")
    drawText(context,"Q2_i1",p_Q2i1,"")
    drawText(context,"U2_t21",p_U2t2,"")
    */

}
