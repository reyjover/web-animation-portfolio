<html>
    <head> 
        <title> 
            SVG Animation
        </title>
    </head>

            <body> 
                
                <div class="modulecontent"> 
                <h2> Rainbow Bars Transition</h2>
                <svg width="300px" height="300px" style="background-color:#646464;"> 
                    <rect x="10" y="10" width="40px" height="10px" style="fill:red" >
                        <animate
                        attributeName="height"
                        values="10;280;10"
                        dur="10s"
                        repeatCount="indefinite"
                        /> 
                    </rect>
                    <rect x="50" y="10" width="40px" height="10px" style="fill:orange">
                        <animate
                        attributeName="height"
                        values="10;280;10"
                        dur="10s"
                        begin="+2s"
                        repeatCount="indefinite"
                        /> 
                    </rect>
                    <rect x="90" y="10"width="40px" height="10px" style="fill:yellow">
                        <animate
                        attributeName="height"
                        values="10;280;10"
                        dur="10s"
                        begin="+3s"
                        repeatCount="indefinite"
                        /> 
                    </rect>
                    <rect x="130" y="10" width="40px" height="10px" style="fill:green">
                        <animate
                        attributeName="height"
                        values="10;280;10"
                        dur="10s"
                        begin="+4s"
                        repeatCount="indefinite"
                        /> 
                    </rect>
                    <rect x="170" y="10"width="40px" height="10px" style="fill:blue">
                        <animate
                        attributeName="height"
                        values="10;280;10"
                        dur="10s"
                        begin="+5s"
                        repeatCount="indefinite"
                        /> 
                    </rect>
                    <rect x="210" y="10"width="40px" height="10px" style="fill:indigo">
                        <animate
                        attributeName="height"
                        values="10;280;10"
                        dur="10s"
                        begin="+6s"
                        repeatCount="indefinite"
                        /> 
                    </rect>
                    <rect x="250" y="10" width="40px" height="10px" style="fill:violet">
                        <animate
                        attributeName="height"
                        values="10;280;10"
                        dur="10s"
                        begin="+7s"
                        repeatCount="indefinite"
                        /> 
                    </rect>
                </svg>
</div>
            </body>

</html> 


