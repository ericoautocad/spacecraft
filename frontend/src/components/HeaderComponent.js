import React, { Component } from 'react' 
import { Navbar, NavbarToggler, NavbarBrand, Nav, NavItem, NavLink, Collapse } from 'reactstrap' 

class HeaderComponent extends Component{ 

    constructor(props){ 
        
        super(props) 

        this.state = { isOpen : true }

        this.toggleNavbar = this
        .toggleNavbar
        .bind(this) 
    
    } 
    
    toggleNavbar(){ 
        this.setState({ 
            isOpen : !this.state.isOpen
        })
    } 
    
    render(){ 
        let isOpen = this.state.isOpen
        return ( 
            <header> 
                <Navbar color = "faded" light expand className = "navbarcustom" > 
                    <NavbarToggler right = "true" onClick = {this.toggleNavbar} /> 
                    <NavbarBrand href="/" >Spacecraft stop calculation</NavbarBrand> 
                    <Collapse isOpen = {isOpen} navbar = { true } > 
                    <Nav navbar = { true } > 
                        <NavItem  > 
                            <NavLink href = "/spacecraft" >List spacecraft</NavLink>
                        </NavItem>
                        <NavItem> 
                            <NavLink href = "/spacecraftstopcalculation" > Spacecraft stop calculation</NavLink>
                        </NavItem> 

                    </Nav>

                    </Collapse>
                </Navbar>
            </header>
        ) 

    }

} 

export default HeaderComponent