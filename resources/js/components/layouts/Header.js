import React, { useState } from 'react';
import { Container, Navbar, Nav} from 'react-bootstrap'
import { Link } from "react-router-dom";

const Header = () => {

    const [publicURL, setPublicURL] = useState('/taskmanager/');

    return (
        <>
            <Navbar bg="dark" expand="lg" variant="dark" sticky="top">
                <Container>
                    <Link to={`${publicURL}`}>
                        <Navbar.Brand href="#home">
                            Task Manager
                        </Navbar.Brand>
                    </Link>
                    <Navbar.Toggle aria-controls="basic-navbar-nav" />
                    <Navbar.Collapse id="basic-navbar-nav">
                        <Nav className="mr-auto">
                            <Link to={`${publicURL}`}>
                                <Nav.Item className="text-white mr-2" href={`${publicURL}`}>
                                    Home
                                </Nav.Item>
                            </Link>
                            <Link to={`${publicURL}about`}>
                                <Nav.Item className="text-white mr-2" href={`${publicURL}about`}>
                                    About
                                </Nav.Item>
                            </Link>
                            <Link to={`${publicURL}contact`}>
                                <Nav.Item className="text-white mr-2" href={`${publicURL}contact`}>
                                    Contact
                                </Nav.Item>
                            </Link>
                        </Nav>
                    </Navbar.Collapse>
                </Container>
            </Navbar>
        </>
    );
}

export default Header;