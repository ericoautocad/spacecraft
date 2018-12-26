import React, { Component } from 'react' 
import { Container, Row, Col, Form, FormGroup, Input, Button, Label, Table } from 'reactstrap' 
import { spacecraftstopcalculation } from './Spacecraftbridgebackend' 

class SpacecraftstopcalculationComponent extends Component{ 
    
    constructor(props){ 
        
        super(props) 
        
        this.state = { distance : 0, listspacecraft : [] } 
        
        this.handleChange = this.handleChange.bind(this) 
        
        this.handleSubmit = this.handleSubmit.bind(this) 
        
    } 
    
    handleChange(event){ 
        
        this.setState({ distance : event.target.value}) 
    
    } 
    handleSubmit(event){ 
        
        let { distance } = this.state 
        
        spacecraftstopcalculation(distance).then(listspacecraft => this.setState( { listspacecraft : listspacecraft.data } ) ) 
    
    } 
    
    render(){ 
        
        let { listspacecraft } = this.state 

        return ( 
            <Container> 
                <Form> 
                    <Row> 
                        <Col xs = "8" sm = "8" md = "8" className = "margin1em" > 
                            <FormGroup> 
                                <Label> Distance: </Label> 
                                <Input name = "distance" type = "number" className = "form-control" onChange = { this.handleChange } /> 
                            </FormGroup> 
                        </Col> 
                        <Col xs = "4" sm = "4" md = "4" > 
                            <FormGroup> 
                                <Button color = "primary" className = "margintopbutton" onClick = { this.handleSubmit } > Calculate total stops spacecraft </Button> 
                            </FormGroup> 
                        </Col> 
                    </Row> 
                </Form> 
                <Row> 
                    <Col xs = "12" sm = "12" md = "12" > 
                        <Table> 
                            <thead> 
                                <tr> 
                                    <th>Name</th> 
                                    <th>Total stops</th> 
                                </tr>                                                 
                            </thead> 
                            <tbody> 
                            { listspacecraft.map((spacecraft, index) => ( 
                                <tr key = { index } > 
                                    <td>{spacecraft.name}</td> 
                                    <td>{spacecraft.totalnumberofstop}</td> 
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

export default SpacecraftstopcalculationComponent
