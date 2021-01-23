import React, { useState } from 'react';
import { Container, Navbar, Nav} from 'react-bootstrap'
import { Link } from "react-router-dom";

const Header = () => {

    const [publicURL, setPublicURL] = useState('/taskmanager/');

    return (
        <>
            <Navbar bg="dark" expand="lg" variant="dark" sticky="top">
                <Container>
                    <Navbar.Brand href="#home">
                        <Link to={`${publicURL}`}>Task Manager</Link>
                    </Navbar.Brand>
                    <Navbar.Toggle aria-controls="basic-navbar-nav" />
                    <Navbar.Collapse id="basic-navbar-nav">
                        <Nav className="mr-auto">
                            <Nav.Link href="#">
                                <Link to={`${publicURL}`}>Home</Link>
                            </Nav.Link>
                            <Nav.Link href="#">
                                <Link to={`${publicURL}about`}>About</Link>
                            </Nav.Link>
                            <Nav.Link href="#">
                                <Link to={`${publicURL}contact`}>Contact</Link>
                            </Nav.Link>
                        </Nav>
                    </Navbar.Collapse>
                </Container>
            </Navbar>
        </>
    );
}

export default Header;