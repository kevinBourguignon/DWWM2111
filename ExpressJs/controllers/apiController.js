const repository = require('../db/candidatesRepository')

exports.index = async (req, res) => {

    // repository.getAll().then(result => {
    //    res.json(result)
    // }).catch(err => {
    //    console.error(err)
    // })

    try {
        let result = await repository.getAll()
        res.json(result)

    } catch(err) {
        console.error(err)
        res.end(500).end()
    }
}

exports.getById = async (req, res) => {
    try {
        const { id, name} = req.params
        //const id = req.params.id
        let result = await repository.getById(id)
        res.status(404).json({erreur: "404"})

    } catch (err) {
        console.error(err)
        res.status(500).end()
    }
}

exports.add = async (req, res) => {
    console.log(req.body)
    const model = req.body
    let result = await repository.add(model)
    res.send('ok')
}

exports.remove = async (req, res) => {
    let { id } = req.params
    let result = await repository.delete(id)
    res.status(202).end()
}
