<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>React Simple Calc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />

    <script src="https://unpkg.com/react@15/dist/react.min.js"></script>
    <script src="https://unpkg.com/react-dom@15/dist/react-dom.min.js"></script>
    <script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
    <?php 
        include 'calc.php';

        $a['latitude']=54.3821;
        $a['longitude']=18.454;

        $b['latitude']=54.5037439;
        $b['longitude']=18.3233968;

        $c['latitude']=52.17;
        $c['longitude']=20.9725;
        
    //    echo getDistanceInMeters($a, $b).'<br>';
    //    echo getDistanceInMeters($a, $c).'<br>';

    //    echo distanceGeoPoints($a['latitude'], $a['longitude'], $c['latitude'], $c['longitude']).'<br>';;
    ?>

    <div id="root"></div>
    <script type="text/babel">
        class Hello extends React.Component {

            constructor() {
                super();
                this.state = {
                    message: "my friend (from this state)",
                };
                this.updateMessage = this.updateMessage.bind(this);
            }

            updateMessage() {
                this.setState({
                    message: "my friend (from change state)",
                });
            }

            render() {
                return (
                    <div>
                        <h1>Hello {this.state.message}!</h1>
                        <button onClick={this.updateMessage}>Click</button>
                    </div>
                );
            }
        }

        ReactDOM.render(<Hello message="my friend" />, document.getElementById("root"));
    </script>
</body>
</html>