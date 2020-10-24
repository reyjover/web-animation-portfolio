<html>
    <head> 
        <title> SVG Exercises </title>
        <style> 
    .container{
    margin-top: 50px;
    padding: 30px;
    display: inline-block;
    width: fit-content;
    height: fit-content;
    }
</style>
    </head>
        <body> 
            <h4> SANNY REY JOVER | BSIT3A </h4>
            <h4> SVG Exercises - 7 Items  </h4>
            <div class="container"> 
                <svg width="200px" height="300px" style="border:5px solid rgb(240, 211, 84); background-color: #161616;" >
            
                    /* lines */
                    <g> 
                        <line x1="20" y1="30" x2="180" y2="30" style="stroke:#F7EF8A;stroke-width:2" />
    
                        <line x1="20" y1="70" x2="180" y2="70" style="stroke:#F7EF8A;stroke-width:2" />
                        <line x1="40" y1="90" x2="160" y2="90" style="stroke:#F7EF8A;stroke-width:2" />
                        <line x1="60" y1="110" x2="140" y2="110" style="stroke:#F7EF8A;stroke-width:2" />
    
                        <line x1="60" y1="190" x2="140" y2="190" style="stroke:#F7EF8A;stroke-width:2" />
                        <line x1="40" y1="210" x2="160" y2="210" style="stroke:#F7EF8A;stroke-width:2" />
                        <line x1="20" y1="230" x2="180" y2="230" style="stroke:#F7EF8A;stroke-width:2" />
    
                        <line x1="20" y1="270" x2="180" y2="270" style="stroke:#F7EF8A;stroke-width:2" />
                        <line x1="100" y1="5" x2="100" y2="295" style="stroke:#F7EF8A;stroke-width:2" />
                    </g>
                    /* end of lines */
    
                    /* top circles */
                    <g>
                        <circle cx="30" cy="30" r="10" fill="#D2AC47"/>
                        <circle cx="65" cy="30" r="15" fill="#EDC967"/>
                        <circle cx="100" cy="30" r="20" fill="#F7EF8A"/>
                        <circle cx="135" cy="30" r="15" fill="#EDC967"/>
                        <circle cx="170" cy="30" r="10"fill="#D2AC47"/>
                    </g>
                    /* end of top circles */
    
                    /* bottom circles */
                    <g>
                        <circle cx="30" cy="270" r="10"fill="#D2AC47"/>
                        <circle cx="65" cy="270" r="15" fill="#EDC967"/>
                        <circle cx="100" cy="270" r="20" fill="#F7EF8A"/>
                        <circle cx="135" cy="270" r="15" fill="#EDC967"/>
                        <circle cx="170" cy="270" r="10" fill="#D2AC47"/>
                    </g>
                    /* end of bottom circles */
    
    
                    /* start of middle circles */
                    <g>   
                        <circle cx="100" cy="80" r="30" fill="#EDC967"/>
                        <circle cx="100" cy="220" r="30" fill="#EDC967"/>
                        <circle cx="160" cy="150" r="30" fill="#EDC967"/>
                        <circle cx="40" cy="150" r="30" fill="#EDC967"/>
                        <circle cx="100" cy="150" r="40" fill="#F7EF8A"/>
                        <circle cx="60" cy="110" r="10" fill="#EDC967"/>
                        <circle cx="40" cy="90" r="8"fill="#D2AC47"/>
                        <circle cx="20" cy="70" r="6" fill="#E0AA3E"/>
                        <circle cx="140" cy="110" r="10" fill="#EDC967" />
                        <circle cx="160" cy="90" r="8"fill="#D2AC47"/>
                        <circle cx="180" cy="70" r="6"fill="#E0AA3E"/>
                        <circle cx="60" cy="190" r="10" fill="#EDC967" />
                        <circle cx="40" cy="210" r="8"fill="#D2AC47"/>
                        <circle cx="20" cy="230" r="6"fill="#E0AA3E"/>
                        <circle cx="140" cy="190" r="10" fill="#EDC967" />
                        <circle cx="160" cy="210" r="8"fill="#D2AC47"/>
                        <circle cx="180" cy="230" r="6"fill="#E0AA3E"/>
                          <circle cx="100" cy="150" r="40" fill="#F7EF8A"/>
    
                    </g>
                    /* end of middle circles */
                    <h4> 1. Circles and Lines</h4>
            </div> 


            <div class="container"> 
                <svg width="200px" height="300px" style="border:5px solid rgb(240, 211, 84); background-color: #161616;" >
                
                    <g>
                        <rect x="80" y="10" width="40px" height="100px" fill="#E0AA3E"/> 
                        <rect x="80" y="190" width="40px" height="100px" fill="#E0AA3E"/> 
                        <rect x="140" y="130" width="50px" height="40px" fill="#E0AA3E" /> 
                        <rect x="10" y="130" width="50px" height="40px" fill="#E0AA3E"/> 
                    </g>
                    <g>
                        <circle cx="100" cy="150" r="30" fill="#F7EF8A"/> 
    
                        <circle cx="50" cy="100" r="20" fill="#EDC967"/> 
                        <circle cx="150" cy="100" r="20" fill="#EDC967"/> 
    
                        <circle cx="20" cy="70" r="10" fill="#D2AC47"/> 
                        <circle cx="180" cy="70" r="10" fill="#D2AC47"/> 
    
                        <circle cx="150" cy="200" r="20" fill="#EDC967"/> 
                        <circle cx="50" cy="200" r="20"fill="#EDC967" /> 
    
                        <circle cx="20" cy="230" r="10" fill="#D2AC47"/> 
                        <circle cx="180" cy="230" r="10" fill="#D2AC47"/> 
    
                    </g>
    
    
                    </svg>
                    <h4> 2. Rectangle and Circle</h4>
            </div>

            <div class="container">
                <svg width="200px" height="300px" style="border:5px solid rgb(240, 211, 84); background-color: #161616;" >
                    <g> 
                        <polyline points="30,25 55,50, 30,75, 55,100, 30,125, 55,150, 30,175 55,200 30,225 55,250 30,275" style= "fill:none; stroke:#F9F295; stroke-width:5;" />
                        <polyline points="50,25 75,50, 50,75, 75,100, 50,125, 75,150, 50,175 75,200 50,225 75,250 50,275" style= "fill:none; stroke:#e9e171; stroke-width:5;" />
                        <polyline points="70,25 95,50, 70,75, 95,100, 70,125, 95,150, 70,175 95,200 70,225 95,250 70,275" style= "fill:none; stroke:#f1ce59; stroke-width:5;" />
                        <polyline points="90,25 115,50, 90,75, 115,100, 90,125, 115,150, 90,175 115,200 90,225 115,250 90,275" style= "fill:none; stroke:#f1c643; stroke-width:5;" />
                        <polyline points="110,25 135,50, 110,75, 135,100, 110,125, 135,150, 110,175 135,200 110,225 135,250 110,275" style= "fill:none; stroke:#e9b958; stroke-width:5;" />
                        <polyline points="130,25 155,50, 130,75, 155,100, 130,125, 155,150, 130,175 155,200 130,225 155,250 130,275" style= "fill:none; stroke:#f5c25d; stroke-width:5;" />
                        <polyline points="150,25 175,50, 150,75, 175,100, 150,125, 175,150, 150,175 175,200 150,225 175,250 150,275" style= "fill:none; stroke:#e9b348; stroke-width:5;" />
                    </g>
        
                    <g> /* 1 diagonal line */
                        <circle cx="175" cy="50" r="10" fill="#F9F295"/>
                        <circle cx="135" cy="50" r="10" fill="#F9F295"/> 
                        <circle cx="150" cy="75" r="10" fill="#F9F295"/> 
                     
                    </g>
        
                    <g> /* 2 diagonal line */
                        <circle cx="95" cy="50" r="10" fill="#e9e171"/> 
                        <circle cx="110" cy="75" r="10" fill="#e9e171"/> 
                        <circle cx="135" cy="100" r="10" fill="#e9e171"/> 
                        <circle cx="150" cy="125" r="10" fill="#e9e171"/> 
                    </g>
        
                    <g> /* 3 diagonal line */
                        <circle cx="55" cy="50" r="10" fill="#f1ce59"/> 
                        <circle cx="70" cy="75" r="10" fill="#f1ce59"/> 
                        <circle cx="55" cy="50" r="10" fill="#f1ce59"/> 
                        <circle cx="95" cy="100" r="10" fill="#f1ce59"/> 
                        <circle cx="110" cy="125" r="10" fill="#f1ce59"/> 
                        <circle cx="135" cy="150" r="10" fill="#f1ce59"/> 
                        <circle cx="150" cy="175" r="10" fill="#f1ce59"/> 
                    </g>
        
                    <g> /* 4 diagonal line */
                        <circle cx="55" cy="100" r="10" fill="#f1c643"/> 
                        <circle cx="70" cy="125" r="10" fill="#f1c643"/> 
                        <circle cx="95" cy="150" r="10" fill="#f1c643"/> 
                        <circle cx="110" cy="175" r="10" fill="#f1c643"/> 
                        <circle cx="135" cy="200" r="10" fill="#f1c643"/> 
                        <circle cx="135" cy="150" r="10" fill="#f1c643"/> 
                        <circle cx="150" cy="225" r="10" fill="#f1c643"/> 
                    </g>
        
                    <g> /* 5 diagonal line */
                        <circle cx="55" cy="150" r="10" fill="#e9b958"/> 
                        <circle cx="70" cy="175" r="10" fill="#e9b958"/> 
                        <circle cx="95" cy="200" r="10" fill="#e9b958"/> 
                        <circle cx="110" cy="225" r="10" fill="#e9b958"/> 
                        <circle cx="135" cy="250" r="10" fill="#e9b958"/> 
                        <circle cx="155" cy="275" r="10" fill="#e9b958"/> 
                    </g>
        
                    <g> /* 6 diagonal line */
                        <circle cx="55" cy="200" r="10" fill="#f5c25d"/> 
                        <circle cx="70" cy="225" r="10" fill="#f5c25d"/> 
                        <circle cx="95" cy="250" r="10" fill="#f5c25d"/> 
                        <circle cx="110" cy="275" r="10" fill="#f5c25d"/> 
                    </g>
                    <g> /* 7 diagonal line */
                        <circle cx="55" cy="250" r="10" fill="#e9b348"/> 
                        <circle cx="70" cy="275" r="10" fill="#e9b348"/> 
                        <circle cx="30" cy="275" r="10" fill="#e9b348"/>
                    </g>
        
                </svg>
                <h4> 3. Polyline and Circle</h4>
            </div>


            <div class="container">
                <svg width="200px" height="300px" style="border:5px solid rgb(240, 211, 84); background-color: #161616;" >
                
                    <g>
                        
                        <rect x="55" y="110" width="40px" height="80px" rx="30" ry="30" fill="#f5c25d" /> 
                        <rect x="105" y="110" width="40px" height="80px" rx="30" ry="30" fill="#f5c25d" /> 
                        <rect x="75" y="100" width="50px" height="100px" rx="30" ry="30" fill="#F9F295" /> 

                 
                        <rect x="120" y="55" width="50px" height="30px" rx="30" ry="30" fill="#f5c25d" /> 
                        <rect x="110" y="75" width="50px" height="30px" rx="30" ry="30" fill="#f1ce59" /> 

               
                        <rect x="30" y="55" width="50px" height="30px" rx="30" ry="30" fill="#f5c25d" /> 
                        <rect x="40" y="75" width="50px" height="30px" rx="30" ry="30" fill="#f1ce59" /> 

                        
                        
                        <rect x="30" y="215" width="50px" height="30px" rx="30" ry="30" fill="#f5c25d" />
                        <rect x="40" y="195" width="50px" height="30px" rx="30" ry="30" fill="#f1ce59" />  

                        
                        <rect x="120" y="215" width="50px" height="30px" rx="30" ry="30" fill="#f5c25d" /> 
                        <rect x="110" y="195" width="50px" height="30px" rx="30" ry="30" fill="#f1ce59" /> 


                        <rect x="-15" y="130" width="25px" height="40px" rx="30" ry="30" fill="#e9b958" /> 
                        <rect x="190" y="130" width="25px" height="40px" rx="30" ry="30" fill="#e9b958" /> 
                        <rect x="90" y="-30" width="20px" height="40px" rx="30" ry="30" fill="#e9b958" /> 
                        <rect x="90" y="290" width="20px" height="40px" rx="30" ry="30" fill="#e9b958" /> 
                        


                    </g>

                    <g>
                        <polyline points="20,-1 26,10 30,-1" style= "fill:none; stroke:#f5c25d; stroke-width:5;" />

                        <polyline points="10,-1 28,30 40,-1" style= "fill:none; stroke: #f1c643; stroke-width:5;" />

                    </g>

                    <g> 

                        <polyline points="85,-1 100,24, 115,-1," style= "fill:none; stroke:#f1c643; stroke-width:5;" />

                        <polyline points="75,-1 100,42, 125,-1," style= "fill:none; stroke:#e9b348; stroke-width:5;" />

                        <polyline points="65,-1 100,60, 135,-1," style= "fill:none; stroke:#e9b958; stroke-width:5;" />

                        <polyline points="55,-1 100,80, 145,-1," style= "fill:none; stroke:#f1ce59; stroke-width:5;" />
                    </g>

                    <g> 
                        <polyline points="170,-1 175,10 180,-1" style= "fill:none; stroke:#f5c25d; stroke-width:5;" />

                        <polyline points="160,-1 175,30, 190,-1" style= "fill:none; stroke:#f1c643; stroke-width:5;" />

                    </g>

                    <polyline points="0,0 30,50 50,0 100,90 150,0 175,50 200, 0" style= "fill:none; stroke:#F9F295; stroke-width:5;" />

                    /* end of top polylines*/

                    <g>
                    <polyline points="-5,100, 20,150 -5,200" style= "fill:none; stroke: #e9b958; stroke-width:5;"/>
 
                    <polyline points="-5,80, 30,150 -5,220" style= "fill:none; stroke:#f1ce59; stroke-width:5;"/>

                    <polyline points="-5,60, 40,150 -5,240" style= "fill:none; stroke:#f5c25d; stroke-width:5;"/>

                    <polyline points="-5,40, 50,150 -5,260" style= "fill:none; stroke:#f1c643; stroke-width:5;"/>

                    <polyline points="-5,20, 60,150 -5,280" style= "fill:none; stroke:#F9F295; stroke-width:5;"/>
                    </g>


                    <g>
                    <polyline points="205,100,180,150 205,200" style= "fill:none; stroke: #e9b958; stroke-width:5;"/>
  
                    <polyline points="205,80, 170,150 205,220" style= "fill:none; stroke:#f1ce59; stroke-width:5;"/>

                    <polyline points="205,60, 160,150 205,240" style= "fill:none; stroke:#f5c25d; stroke-width:5;"/>

                    <polyline points="205,40, 150,150 205,260" style= "fill:none; stroke:#f1c643; stroke-width:5;"/>

                    <polyline points="205,20, 140,150 205,280" style= "fill:none; stroke:#F9F295; stroke-width:5;"/>
                    </g>    

                    /*end of sides*/

                    
                    <g>
                        <polyline points="180,301 174,290 170,301" style= "fill:none; stroke:#f5c25d; stroke-width:5;" />

                        <polyline points="190,301 172,270 160,301" style= "fill:none; stroke: #f1c643; stroke-width:5;" />

                    </g>
                    
                    <g> 

                        <polyline points="115,301 100,276, 85,301," style= "fill:none; stroke:#f1c643; stroke-width:5;" />

                        <polyline points="125,301 100,258, 75,301," style= "fill:none; stroke:#e9b348; stroke-width:5;" />

                        <polyline points="135,301 100,240, 65,301," style= "fill:none; stroke:#e9b958; stroke-width:5;" />

                        <polyline points="145,301 100,220, 55,301," style= "fill:none; stroke:#f1ce59; stroke-width:5;" />
                    </g>

                    <g> 
                        <polyline points="30,301 25,290 20,301" style= "fill:none; stroke:#f5c25d; stroke-width:5;" />

                        <polyline points="40,301 25,270, 10,301" style= "fill:none; stroke:#f1c643; stroke-width:5;" />

                    </g>
                    
                    <polyline points="200,300 170,250 150,300 100,210 50,300 25,250 0,300" style= "fill:none; stroke:#F9F295; stroke-width:5;" />

                
                </svg>
                <h4> 4. Ellipse and Polyline</h4>
            </div>

            <br/>
            <div class="container">
                <svg width="200px" height="300px" style="border:5px solid rgb(240, 211, 84); background-color: #161616;" >
                    <g>
                        <rect x="10" y="10" width="180px" height="5px" fill="#e9b958"/> 
                        <rect x="10" y="20" width="180px" height="20px" fill="#e9b958"/> 
                        <rect x="10" y="45" width="180px" height="30px" fill="#f1c643"/> 
                        <rect x="10" y="80" width="180px" height="40px" fill="#f1ce59"/> 
                        <rect x="10" y="125" width="180px" height="50px" fill="#F9F295"/> 
                        <rect x="10" y="180" width="180px" height="40px" fill="#f1ce59"/> 
                        <rect x="10" y="225" width="180px" height="30px" fill="#f1c643"/> 
                        <rect x="10" y="260" width="180px" height="20px" fill="#e9b958"/> 
                        <rect x="10" y="285" width="180px" height="5px" fill="#e9b958"/> 
                    </g>  
    
                    <g>
                        <circle cx="100" cy="30" r="20" fill="#F9F295" />
                        <circle cx="30" cy="150" r="20" fill="#f1ce59"/>
                        <circle cx="170" cy="150" r="20" fill="#f1ce59"/>
                        <circle cx="100" cy="270" r="20" fill="#F9F295" />
                        <circle cx="100" cy="150" r="35" fill="#e9b958" />
                    </g>
    
                    <g> 
                    <line x1="14.5" y1="12.5" x2="80" y2="12.5" style="stroke:white;stroke-width:1;" />
                    <line x1="15" y1="12.5" x2="15" y2="130" style="stroke:white;stroke-width:1;" />
                    <line x1="15" y1="170" x2="15" y2="287.5" style="stroke:white;stroke-width:1;" />
                    <line x1="14.5" y1="287.5" x2="80" y2="287.5" style="stroke:white;stroke-width:1;" />
                    </g>
    
                    <g>
                    <line x1="120" y1="12.5" x2="185.5" y2="12.5" style="stroke:white;stroke-width:1;" />
                    <line x1="185" y1="12.5" x2="185" y2="130" style="stroke:white;stroke-width:1;" />
                    <line x1="185" y1="170" x2="185" y2="287.5" style="stroke:white;stroke-width:1;" />
                    <line x1="185" y1="287.5" x2="120" y2="287.5" style="stroke:white;stroke-width:1;" />
                    </g>
                    
                    <g> 
                        <line x1="80" y1="55" x2="40" y2="125" style="stroke:white;stroke-width:1;" />
                        <line x1="120" y1="55" x2="160" y2="125" style="stroke:white;stroke-width:1;" />
                        <line x1="120" y1="245" x2="160" y2="175" style="stroke:white;stroke-width:1;" />
                        <line x1="80" y1="245" x2="40" y2="175" style="stroke:white;stroke-width:1;" />
                    </g>
                      
                    <g> 
                        <line x1="90" y1="60" x2="60" y2="115" style="stroke:white;stroke-width:1;" />
                        <line x1="110" y1="60" x2="140" y2="115" style="stroke: white;stroke-width:1;" />
                        <line x1="100" y1="65" x2="75" y2="115" style="stroke:white;stroke-width:1;" />
                        <line x1="100" y1="65" x2="125" y2="115" style="stroke:white;stroke-width:1;" />
    
                 
                        
                    </g>
    
                    <g>
                        <line x1="60" y1="185" x2="90" y2="240" style="stroke:white;stroke-width: 1;" />
                        <line x1="75" y1="185" x2="100" y2="235" style="stroke: white;stroke-width:1;" />
    
                        <line x1="140" y1="185" x2="110" y2="240" style="stroke:white;stroke-width:1;" />
                        <line x1="125" y1="185" x2="100" y2="235" style="stroke:white;stroke-width:1;" />
                    
                    </g>
    
                    </svg>
                    <h4> 5. Line, Rectangle, and Circles </h4>
            </div>

            <div class="container">
                <svg width="200px" height="300px" style="border:5px solid rgb(240, 211, 84); background-color: #161616;" >
                    <g>
                        <polyline points="25,-1 40,5 55,-1" style= "fill:none; stroke:#F9F295; stroke-width:10;" />
                        <polyline points="15,-1 40,15 65,-1" style= "fill:none; stroke:#f5c25d; stroke-width:10;" />
                        <polyline points="5,-1 40,25 75,-1" style= "fill:none; stroke:#F9F295; stroke-width:10;" />
                    </g>
        
                    <g>
                        <polyline points="90,-1 100,10 110,-1" style= "fill:none; stroke:#f5c25d; stroke-width:13;" />
                        <polyline points="85,-1 100,15 115,-1" style= "fill:none; stroke:#F9F295; stroke-width:10;" />
                    </g>
        
                    <g>
        
                        <polyline points="145,-1 160,5 175,-1" style= "fill:none; stroke:#F9F295; stroke-width:13;" />
                        <polyline points="135,-1 160,15 185,-1" style= "fill:none; stroke:#f5c25d; stroke-width:10;" />
                        <polyline points="125,-1 160,25 195,-1" style= "fill:none; stroke:#F9F295; stroke-width:10;" />
                    </g>
        
        
                    <g> 
                        <polyline points="25,301 40,295, 55,301"  style= "fill:none; stroke:#F9F295; stroke-width:10;" />
                        <polyline points="15,301 40,285, 65,301"  style= "fill:none; stroke:#f5c25d; stroke-width:10;" />
                        <polyline points="5,301 40,275, 75,301"  style= "fill:none; stroke:#F9F295; stroke-width:10;" />
                    </g>
        
                    <g>
                        <polyline points="95,301 100,295, 105,301"  style= "fill:none; stroke:#f5c25d; stroke-width:10;" />
                        <polyline points="85,301 100,285, 115,301"  style= "fill:none; stroke:#F9F295; stroke-width:10;" />
                    </g>
        
                    <g> 
                        <polyline points="145,301 160,295, 175,301"  style= "fill:none; stroke:#F9F295; stroke-width:10;" />
                        <polyline points="135,301 160,285, 185,301"  style= "fill:none; stroke:#f5c25d; stroke-width:10;" />
                        <polyline points="125,301 160,275, 195,301"  style= "fill:none; stroke:#F9F295; stroke-width:10;" />
                    </g>
        
        
                    <g>
                        <polyline points="0,0 40,30 80,0 100,20 120,0 160,30 200,0" style= "fill:none; stroke:#f5c25d; stroke-width:5;" />
        
        
                      
                        <polyline points="0,300 40,270 80,300 100,280 120,300 160,270 200,300" style= "fill:none; stroke:#f5c25d; stroke-width:5;" />
                    </g>
        
                    <g>
                        <polygon points="120,20 50,150, 120,280 190,150" style= "fill:#f5c25d; stroke:#e9b958; stroke-width:1;"/>
                        <polygon points="120,50 80,150, 120,250 170,150" style= "fill:#F9F295; stroke:#e9b958; stroke-width:1;"/>
                        
                        <polygon points="80,20 10,150, 80,280 150,150" style= "fill:#F9F295; stroke:#f5c25d; stroke-width:1;"/>
                        <polygon points="80,50 30,150, 80,250 130,150" style= "fill:#f5c25d; stroke:#f5c25d; stroke-width:1;"/>
                    </g>
                </svg>
                <h4> 6. Polyline and Polygon</h4>
            </div>

            <div class="container">

                <svg width="200px" height="300px" style="border:5px solid black;">
                    <rect x="0" y="0" width="100px" height="300px" fill="#f5c25d"/> 
                    <rect x="100" y="0" width="100px" height="300px" fill="#161616"/> 
                <g>
                    <polyline points="30,25 55,50, 30,75, 55,100, 30,125, 55,150, 30,175 55,200 30,225 55,250 30,275" style= "fill:none; stroke:#161616; stroke-width:5;" />
                    <polyline points="60,25 85,50, 60,75, 85,100, 60,125, 85,150, 60,175 85,200 60,225 85,250 60,275" style= "fill:none; stroke:#161616; stroke-width:5;"/>
               
                    <polyline points="170,25 145,50, 170,75, 145,100, 170,125, 145,150, 170,175 145,200 170,225 145,250 170,275" style= "fill:none; stroke:#f5c25d; stroke-width:5;" />
                    <polyline points="140,25 115,50, 140,75, 115,100, 140,125, 115,150, 140,175 115,200 140,225 115,250 140,275" style= "fill:none; stroke:#f5c25d; stroke-width:5;" />\
                </g>
        
                <g>
                    <polygon points="30,235 45,250 30,265" style= "fill:#161616; "/>
                    <polygon points="30,185 45,200 30,215" style= "fill:#161616; "/>
                    <polygon points="30,135 45,150 30,165" style= "fill:#161616; "/>
                    <polygon points="30,85 45,100 30,115" style= "fill:#161616; "/>
                    <polygon points="30,35 45,50 30,65" style= "fill:#161616; "/>
                </g>
                <g>
                    <polygon points="60,235 75,250 60,265" style= "fill:#161616; "/>
                    <polygon points="60,185 75,200 60,215" style= "fill:#161616; "/>
                    <polygon points="60,135 75,150 60,165" style= "fill:#161616; "/>
                    <polygon points="60,85 75,100 60,115" style= "fill:#161616; "/>
                    <polygon points="60,35 75,50 60,65" style= "fill:#161616; "/>
                </g>
        
                <g> 
                    <polygon points="140,235 125,250 140,265" style= "fill:#f5c25d; "/>
                    <polygon points="140,185 125,200 140,215" style= "fill:#f5c25d; "/>
                    <polygon points="140,135 125,150 140,165" style= "fill:#f5c25d; "/>
                    <polygon points="140,85 125,100 140,115" style= "fill:#f5c25d; "/>
                    <polygon points="140,35 125,50 140,65" style= "fill:#f5c25d; "/>
                </g>
                <g> 
                    <polygon points="170,235 155,250 170,265" style= "fill:#f5c25d; "/>
                    <polygon points="170,185 155,200 170,215" style= "fill:#f5c25d; "/>
                    <polygon points="170,135 155,150 170,165" style= "fill:#f5c25d; "/>
                    <polygon points="170,85 155,100 170,115" style= "fill:#f5c25d; "/>
                    <polygon points="170,35 155,50 170,65" style= "fill:#f5c25d; "/>
                </g>
        
                <g>
                    <rect x="90" y="205" width="20px" height="40px" rx="30" ry="30" fill="#F9F295" /> 
                    <rect x="90" y="155" width="20px" height="40px" rx="30" ry="30" fill="#F9F295" /> 
                    <rect x="90" y="105" width="20px" height="40px" rx="30" ry="30" fill="#F9F295" /> 
                    <rect x="90" y="55" width="20px" height="40px" rx="30" ry="30" fill="#F9F295" /> 
                </g>
        
                <g>
                <circle cx="80" cy="225" r="7.5"fill="#161616"/>
                <circle cx="80" cy="175" r="7.5"fill="#161616"/>
                <circle cx="80" cy="125" r="7.5"fill="#161616"/>
                 <circle cx="80" cy="75" r="7.5"fill="#161616"/>
                </g>
                <g>
                    <circle cx="120" cy="225" r="7.5"fill="#f5c25d"/>
                    <circle cx="120" cy="175" r="7.5"fill="#f5c25d"/>
                    <circle cx="120" cy="125" r="7.5"fill="#f5c25d"/>
                     <circle cx="120" cy="75" r="7.5"fill="#f5c25d"/>
                </g>
        
                <g>
                    <line x1="5" y1="5" x2="100" y2="5" style="stroke:#161616;stroke-width:3;" />  
                    <line x1="100" y1="5" x2="195" y2="5" style="stroke:#f5c25d;stroke-width:3;" />  
        
                    <line x1="5" y1="295" x2="100" y2="295" style="stroke:#161616;stroke-width:3;" />  
                    <line x1="100" y1="295" x2="195" y2="295" style="stroke:#f5c25d;stroke-width:3;" />  
        
                    <line x1="6.5" y1="4" x2="6.5" y2="296" style="stroke:#161616;stroke-width:3;" />  
                    <line x1="193.5" y1="4" x2="193.5" y2="296" style="stroke: #f5c25d;stroke-width:3;" />  
        
                    <line x1="100" y1="6.5" x2="100" y2="293.5" style="stroke:#F9F295;stroke-width:1;" />  
                </g>
        
                </svg>
                <h4> 7. Line, Circle, Rectangle, Polyline, Polygon, and Ellipse</h4>
            </div>

            
        </body> 
</html>