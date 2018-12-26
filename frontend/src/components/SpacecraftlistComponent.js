import React, { Component } from 'react' 
import { Container, Row, Col } from 'reactstrap' 
import { Link } from 'react-router-dom'  

class SpacecraftlistComponent extends Component{ 
    
    render(){ 
        
        return ( 
            <Container> 
                <Row> 
                    <Col xs = "6" sm = "6" md = "6" className = "margin1em" > 
                        <Link className = "btn btn-primary" to = "/spacecraft" > List spacecraft </Link> 
                    </Col> 
                    <Col xs = "6" sm = "6" md = "6" className = "margin1em" > 
                        <Link className = "btn btn-primary" to = "/spacecraftstopcalculation" > Calculate total stops spacecraft </Link> 
                    </Col> 
                </Row> 
            </Container> 
        )
    }
} 

export default SpacecraftlistComponent
