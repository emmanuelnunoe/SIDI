import React from "react";

function Mantenimiento() {
    const [proximoMantenimiento, setProximoMantenimiento] = React.useState("");

    const agregaMantenimiento = (e) => {
        e.preventDefault();

        console.log(proximoMantenimiento);
    };
    return (
        <div className="container mt-5">
            <h2 className="text-center m-5">Agregar mantenimiento</h2>
            <hr />

            <div className="row">
                <div className="col-12">
                    <form onSubmit={agregaMantenimiento}>
                        <div className="row">
                            <label htmlFor="textarea">
                                Agregar comentarios{""}
                            </label>
                            <textarea
                                className=" m-5"
                                maxLength="255"
                                cols="80"
                                id="textarea"
                                placeholder="Comentarios del proximo mantenimiento"
                            />
                        </div>
                        <div className="row">
                            <div className="col-6">
                                <label htmlFor="proximoMantenimiento">
                                    Fecha
                                </label>
                                <input
                                    type="date"
                                    name="proximoMantenimiento"
                                    id="proximoMantenimiento"
                                    onChange={(e) =>
                                        setProximoMantenimiento(e.target.value)
                                    }
                                    value={proximoMantenimiento}
                                />
                            </div>

                            <div className="col-6">
                                <button
                                    className="btn btn-dark btn-block"
                                    type="submit"
                                >
                                    Agregar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    );
}

export default Mantenimiento;
