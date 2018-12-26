import React, { Component } from 'react' 
import { Container, Row, Col, Table } from 'reactstrap' 
import { Link } from 'react-router-dom' 
import { findspacecraft } from './Spacecraftbridgebackend' 

class SpacecraftlistinformationComponent extends Component{ 
    
    constructor(props){ 
        
        super(props) 
        
        this.state = { listspacecraft : [] } 
        
    } 
    
    componentDidMount(){ 
        findspacecraft().then(listspacecraft => this.setState( { listspacecraft : listspacecraft.data } ) )
        // findspacecraft().then(listspacecraft => console.log(listspacecraft) )
    }
    
    render(){ 
        
        let { listspacecraft } = this.state 
        
        return ( 
            <Container> 
                <Row> 
                    <Col xs = "12" sm = "12" md = "12" className = "margin1em" > 
                        <Link className = "btn btn-primary" to = "/spacecraftstopcalculation" > Calculate total stops spacecraft </Link> 
                    </Col> 
                </Row> 
                <Row> 
                    <Col xs = "12" sm = "12" md = "12" > 
                        <Table> 
                            <thead> 
                                <tr> 
                                    <th>Name</th> 
                                    <th>Model</th> 
                                    <th>Consumable</th> 
                                    <th>Mglt</th> 
                                </tr>                                                 
                            </thead> 
                            <tbody> 
                            { listspacecraft.map((spacecraft, index) => ( 
                                <tr key = { index } > 
                                    <td>{spacecraft.name}</td> 
                                    <td>{spacecraft.model}</td> 
                                    <td>{spacecraft.consumables}</td> 
                                    <td>{spacecraft.MGLT}</td> 
                                </tr>  
                                ) ) } 
                                                                               
                            </tbody> 
                        </Table> 
                    </Col> 
                </Row> 
            </Container> 
        )
    }
} 

export default SpacecraftlistinformationComponent
